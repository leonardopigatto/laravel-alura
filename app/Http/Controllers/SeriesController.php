<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $series = [
            'Friends',
            'This is Us',
            '24h',
            'The Walking Dead'
        ];

        return view('series.index', [
            'series' => $series
        ]);
    }

    public function create() {
        return view('series.create');
    }
}
