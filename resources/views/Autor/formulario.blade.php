@extends('layout.basico')
@section('content')  
    <form action="/autores/adiciona">
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control">
        </div>
        <div class="">
            <label>Nacionalidade</label>
            <input name="nacionalidade" class="form-control">
        </div>
        <div class="">
            <label>Nascido em</label>
            <input name="AnoNascto" type="number" class="form-control">
        </div>
        <div class="">
            <label>Falecido em</label>
            <input name="anoMorte" type="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
    </form>
@endsection