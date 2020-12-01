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

Route::get('/', function () {
    return redirect('docs');
});

Route::get('edit/{path}', 'HomeController@edit')->middleware('auth');
Route::post('save', 'HomeController@save')->middleware('auth');
Route::post('upload', 'UploadController@upload')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('files', function () {

    $dir      = base_path('resources/docs/System/');
    $contents = '';

    $files = \File::files($dir);

    foreach ($files as $file){

        $contents .= \File::get($file);
    }

    Storage::disk('local')->put('docs.md',$contents);

    echo '<pre>';
    print_r($files);
    echo '</pre>';
    exit;

});
