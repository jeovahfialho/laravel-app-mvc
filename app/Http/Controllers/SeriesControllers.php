<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesControllers extends Controller
{
    public function index(Request $request){

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        return view ('listar-series', compact('series'));
    }
}
