<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __construct(){}

    public function upload(Request $request)
    {
        $name = \Storage::disk('images')->put('', $request->file('image'));
        return response()->json(['id' => $name, 'url' => asset('images/'.$name)]);
    }
}
