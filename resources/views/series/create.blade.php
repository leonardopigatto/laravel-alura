@extends('layout')

@section('titulo')
Adicionar uma Série
@endsection

@section('cabecalho')
Adicionar uma Série
@endsection

@section('conteudo')
<form method="POST">
    <div class="form-group">
        <label for="nome" class="">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
