@extends('layout.basico')
@section('content')  
    <form action="/autores/remove">
        <div class="form-group">
            <input name="id" type="hidden" value="{{$a->id}}" class="form-control"/>
            <h1>remover autor</h1>
            <ul>
                <li><b>Autor:</b>{{$a->nome}}</li>
                <li><b>Nacionalidade:</b>{{$a->nacionalidade}}</li>
            </ul>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
        Confirma romoção do autor</button>
    </form>


@endsection