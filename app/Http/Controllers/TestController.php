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
	
	public function png(Request $request){
		header("Content-type: image/png");
		$text = $request->input('t');
		$im     = imagecreatefrompng("images/button1.png");
		$orange = imagecolorallocate($im, 220, 210, 60);
		$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
		imagestring($im, 3, $px, 9, $string, $orange);
		imagepng($im);
		imagedestroy($im);
	}
}
