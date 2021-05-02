@extends('layout.basico')
@section('content')     
    <h1>Detalhes do Autor {{ $a->nome }} </h1>
    <ul>
        <li><b>Nacionalidade: </b> {{ $a->nacionalidade }} </li>
        <li><b>Nascimento: </b> {{ $a->AnoNascto }}</li>
        <li><b>Falecido em: </b> {{ $a->anoMorte }}</li>
    </ul>         
@endsection

        


