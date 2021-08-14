<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarSeries(){
        $series = [
            'Friends',
            'Game of Thrones',
            'Lost'
        ];

        $html = "<ul>";
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}
