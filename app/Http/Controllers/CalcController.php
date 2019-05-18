<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calculate(Request $request){
        //return response()->json(['message' => 'Thank you for contacting me.'], 201);
        return response()->json($request, 201);
    }
}
