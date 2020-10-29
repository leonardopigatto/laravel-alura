<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $series = Serie::all();

        return view('series.index', [
            'series' => $series
        ]);
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        $nome = $request->nome;
        $serie = Serie::create($request->all());

        echo "Serie: " . $serie->nome . " adicionada com ID: " . $serie->id;
    }
}
