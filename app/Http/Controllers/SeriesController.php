<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = [
            'Friends',
            'Game of Thrones',
            'Lost'
        ];

        return view('series.index', compact('series'));
    }
}
