<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class detailsController extends Controller
{
    public function showDetail(Request $request){
        $in = $request->input('id');
        $inf = Http::get("https://api.tvmaze.com/shows/$in")->json();
         return view('welcome', ['data'=>$inf]);        
    }
}