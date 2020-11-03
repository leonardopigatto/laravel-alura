<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
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
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', [
            'series' => $series,
            'mensagem' => $mensagem
        ]);
    }

    public function create() {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) {

        $serie = Serie::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Serie: {$serie->nome} adicionada com ID: {$serie->id}"
            );

        return redirect()->route('listar_series');
    }

    public function destroy(Request $request) {
        Serie::destroy($request->id);
        $request->session()
        ->flash(
            'mensagem',
            "Serie removida com sucesso"
        );

        return redirect()->route('listar_series');
    }
}
