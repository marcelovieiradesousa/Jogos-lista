<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index(){
        //dd('Olá Mundo!');
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos'=>$jogos]);
    }
    public function create(){
        return view('jogos.create');
    }
    public function store(Request $request){
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }
    public function edit($id){
        $jogos = Jogo::where('id', $id)->first();
        if(!empty($jogos)){
            return view('jogos.edit', ['jogo'=>$jogos]); //JOGO é a variável da view jogos.edit e JOGOS são os dados conforme o id da linha da tabla jogos
        }else 
        return redirect()->route('jogos-index');
    }
    public function update(Request $request, $id){
        $data = [
            'nome' => $request->name, //nome(banco de dados) e name(request que vem do input do atributo name="name")
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'preco' => $request->preco,
        ];
        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }
    public function destroy(Request $request, $id){
        $data = [
            'nome' => $request->name, //nome(banco de dados) e name(request que vem do input do atributo name="name")
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'preco' => $request->preco,
        ];
        Jogo::where('id', $id)->delete($data);
        return redirect()->route('jogos-index');
    }
}
