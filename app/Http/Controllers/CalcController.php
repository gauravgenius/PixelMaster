<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calculate(Request $request){
        //return response()->json(['message' => 'Thank you for contacting me.'], 201);
        //$titleCharWidth = strlen($request->title);
        //$descriptionCharWidth = strlen($request->description);

        //$size = '18';
        //$angle = 0;
        //putenv('GDFONTPATH=' . realpath('.'));
        //$fontfile = 'C:\wamp64\www\PixelMaster\app\Http\Controllers\arial.ttf';
        //$text = 'Hello World';
        //$titlePixel = imagettfbbox($size, $angle, $fontfile, $request->title);
        //$descriptionPixel = imagettfbbox($size, $angle, $fontfile, $request->description);
        //$titlePixelWidth = $titlePixel[2] - $titlePixel[0];
        //$descriptionPixelWidth = $descriptionPixel[2] - $descriptionPixel[0];
        //return "Pixel Width is-> ".$titlePixelWidth." And Character Width is-> ".$titleCharWidth;
  
        //$response['title'] = (is_null($request->keywords)) ? $request->title : $this->highlight($request->title, $request->keywords);
        //$response['url'] = (is_null($request->keywords)) ? $request->url : $this->highlight($request->url, $request->keywords);
        $response['title'] = $request->title;
        $response['url'] = $request->url;
        $response['description'] = (is_null($request->keywords)) ? $request->description : $this->highlight($request->description, $request->keywords);
        return response()->json($response, 201);
    }

    public function highlight($text, $words) {
        preg_match_all('~\w+~', $words, $m);
        if(!$m)
            return $text;
        $re = '~\\b(' . implode('|', $m[0]) . ')\\b~i';
        return preg_replace($re, '<em>$0</em>', $text);
    }
}
