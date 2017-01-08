<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function showPic(Request $request){
        print_r($request->all());
    }
}
