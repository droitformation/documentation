<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit($path)
    {
        $path = getEditUrl($path);

        $contents = file_get_contents(resource_path($path.'.md'));

        return view('edit')->with(['contents' => $contents, 'path' => $path]);
    }

    public function save(Request $request)
    {
        $contents = file_put_contents(resource_path($request->input('path').'.md'), $request->input('text'));

        return redirect($request->input('path'));
    }
}
