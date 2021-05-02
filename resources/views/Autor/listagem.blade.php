@extends('layout.basico')
@section('content')
    @if(empty($autores))
        <div class="alert alert-danger">
         Voce nao tem nenhum autor cadastrado
        </div>
        @else
        <h1>Listagem de autores</h1>
        <table class="table table-striped table-bordered table-hover">
            @foreach ($autores as $a)
                <tr>
                    <td> {{$a->nome}} </td>
                    <td> {{$a->nacionalidade}} </td>
                    <td><a href="/autores/mostra/<?= $a->id ?>">Detalhes</a></td>
                    <td><a href="/autores/edita/<?= $a->id ?>">Editar</a></td>
                    <td><a href="/autores/exclui/<?= $a->id ?>">excluir</a></td>     
                </tr>
            @endforeach
        </table>
    @endif
    @if(old('nome'))
        <div class="alert alert-sucess">
            <strong>Sucesso!</strong>
            O autor {{old('nome')}} foi adicionado
        </div>
    @endif
@endsection

