<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
                'The Walking Dead',
                'DNA do Crime',
                'SUIT'
        ];

        return view('series.index')->with('series', $series);
    }
}
