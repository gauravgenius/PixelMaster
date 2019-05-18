<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calculate(Request $request){
        //return response()->json(['message' => 'Thank you for contacting me.'], 201);
        $titleCharCount = $request->title;
        $descriptionCharCount = $request->description;
        $titlePixelCount = $request->title;
        $descriptionPixelCount = $request->title;
        return response()->json($request, 201);
    }
}
