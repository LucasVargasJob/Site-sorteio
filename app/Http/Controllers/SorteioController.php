<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sorteio;
use App\User;
use Redirect;
use App\Http\Controllers\Controller;

class SorteioController extends Controller{

    public function index(){
        $sorteios = Sorteio::get();
        return view('sorteios.lista' , ['sorteios' => $sorteios]);
    }

    public function novo(){
    	return view('sorteios.formulario');
    }

    public function salvar(Request $request){
        $sorteio = new Sorteio();
   		$sorteio = $sorteio->create($request->all());

   		\Session::flash('mensagem_sucesso', 'Sorteio cadastrado com sucesso!');
        return Redirect::to('sorteios/novo');
    }

    public function editar($id){
        $sorteio = Sorteio::findOrFail($id);
        return view('sorteios.formulario',['sorteio' => $sorteio]);
    }

    public function atualizar($id, Request $request){
        $sorteio = Sorteio::findOrFail($id);
        $sorteio->update($request->all());

        \Session::flash('mensagem_sucesso', 'Sorteio atualizado com sucesso!');
        return Redirect::to('sorteios/'.$sorteio->id.'/editar');
    }

    public function deletar($id){
       $sorteio = Sorteio::findOrFail($id);
       $sorteio->delete();

        \Session::flash('mensagem_sucesso', 'Sorteio deletado com sucesso!');
       return Redirect::to('sorteios');
    }

    public function interesses(){
        $sorteio = Sorteio::get();
        return view('sorteios.interesses' , ['sorteios' => $sorteios]); 
    }

        public function manyToMany($id){
        $users = User::where('id', $id)->get()->first();
        $sorteios = $users->sorteios;
        return view('sorteios.interesses' , ['sorteios' => $sorteios]); 
    }

    public function manyToManyInsert($id,$sorteio){
        $users = User::find($id);
        $users->sorteios()->attach($sorteio);
        $sorteios = $users->sorteios;
        return view('sorteios.interesses' , ['sorteios' => $sorteios]); 
    }

    public function pontos(){
        return view('sorteios.pontos');   
    }

}

