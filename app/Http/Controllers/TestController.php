<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function showPic(Request $request){
        $text = $request->input('t');
        echo gd_info();
    }
}
