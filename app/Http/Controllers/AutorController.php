<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Autor;
use App\Http\Requests\AutoresRequest;
use Request;
class AutorController extends Controller
{
    public function lista() {
        $autores = Autor::all();
        return view('autor.listagem')->with('autores', $autores);
    }
    public function mostra($id) {
        $autores = Autor::find($id);
        if (empty($autores)) {
            return "Esse autor não existe";
        }
        return view('autor.detalhe')->with('a', $autores);
    }
    public function novo() {
        return view('autor.formulario');
    }
    public function adiciona() {
        $params = Request::all();
        $autor = new Autor($params);
        $autor->save();
        return redirect('/autores')->withInput(Request::only('nome'));
    }
    public function edita($id) {
        $autor = Autor::find($id);
        if(empty($autor)) {
            return "Esse autor não existe";
        }
        return view('autor.edita')->with('a', $autor);
    }
    public function altera() {
        $id = Request::input('id');
        $nome = Request::input('nome');
        $nacionalidade = Request::input('nacionalidade');
        $AnoNascto = Request::input('AnoNascto');
        $anoMorte = Request::input('anoMorte');
        Autor::where('id', $id)->update(['nome' => $nome, 'nacionalidade' => $nacionalidade, 'AnoNascto' => $AnoNascto, 'anoMorte' => $anoMorte]);
        return redirect('/autores')->withInput(Request::only('nome'));
    }
    public function exclui($id) {
        $autores = Autor::find($id);
        if(empty($autores)) {
            return "Esse autor não existe";
        }
        return view('autor.remove')->with('a', $autores);
    }
    public function remove() {
        $id = request::input("id");
        $autores = Autor::find($id);
        $autores->delete();
        return redirect('/autores')->withInput(request::only('nome'));
    }

    
}
