<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([ 'middleware' => ['auth']], function () {

    Route::get('/', function () {
        return redirect('docs');
    });

    Route::get('edit/{path}', 'HomeController@edit')->middleware('auth');
    Route::post('save', 'HomeController@save')->middleware('auth');
    Route::post('upload', 'UploadController@upload')->middleware('auth');
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();

Route::get('files', function () {

    $folder   = '';
    $dir      = base_path('resources/docs/System/'.$folder);
    $contents = '';

    $hierarchy = [];
    $files = \File::allfiles($dir);

    foreach ($files as $file){
        $path = str_replace('/Users/cindyleschaud/Sites/localhost/library/resources/docs/System/','',$file);

        $pieces = explode('/',$path);
        $name   = array_pop($pieces);
        $file = $name;

        if(count($pieces) > 1){
            $hierarchy[$pieces[0]][$pieces[1]][] = $file;
        }
        elseif(count($pieces) == 1){
            if($pieces[0] == 'central'){
                $hierarchy[$pieces[0]]['general'][] = $file;
            }
            else{
                $hierarchy[$pieces[0]][] = $file;
            }
        }
        else{
            $hierarchy['general'] = $file;
        }
    }

    $properOrderedArray = array_merge(array_flip(array('general', 'architecture', 'central','sites','faq','api','archives')), $hierarchy);

    echo '<pre>';
    print_r($properOrderedArray);
    echo '</pre>';

   // $liste = \Arr::flatten($properOrderedArray);

    $directories = [
        '',
        'architecture',
        'central',
        'central/adresses',
        'central/colloques',
        'central/emails',
        'central/eshop',
        'central/misc',
        'sites',
        'faq',
        'api',
        'archives',
    ];

    foreach ($directories as $folder){
        //$folder   = 'sites';
        $dir      = base_path('resources/docs/System/'.$folder);
        $contents = '';

        $files = \File::files($dir);

        foreach ($files as $path){
            $contents .= \File::get($path);
        }

        Storage::disk('local')->put('docs-'.$folder.'.md',$contents);
    }

    //Storage::disk('local')->put('docs.md',$contents);

    exit;

});
