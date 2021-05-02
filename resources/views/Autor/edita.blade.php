@extends('layout.basico')
@section('content')  
    <form action="/autores/altera">
        <div class="form-group">
            <input name="id" type="hidden" value="{{$a->id}}" class="form-control"/>
            <label>Nome</label>
            <input name="nome" value="{{$a->nome}}" class="form-control"/>
            <label></label>
            <label>Nacionalide</label>
            <input name="nacionalidade" value="{{$a->nacionalidade}}"  class="form-control"/>
            <label>Ano de nascimento</label>
            <input name="AnoNascto" value="{{$a->AnoNascto}}"  class="form-control"/>
            <label>Ano de falecimento</label>
            <input name="nacionalidade" value="{{$a->anoMorte}}"  class="form-control"/>

        </div>
        <button type="submit" class="btn btn-primary btn-block">Altera</button>
    </form>
@endsection