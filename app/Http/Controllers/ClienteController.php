<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index($id){
        
        $cliente = Cliente::find($id);
        return response()
            ->json(['nome' =>$cliente->nome, 
            'endereco' => $cliente->endereco,
            'email'=> $cliente->email,
            'telefone'=>$cliente->telefone
            ])
            ->withCallback($request->input('callback'));
            //return ('Hello world');
    }

    public function adcionar(Request $req){
        
        $dadosCliente = $req::all();

        Cliente::create($dadosCliente);

        return('Cliente cadastrado');
    }

    public function atualizar(Request $req, $id){
        
        $dadosCliente = $req::all();

        Cliente::find($id)->update($dadosCliente);

        return('Cliente atualizado');
    }

    public function deletar($id){

        Cliente::find($id)->delete();

        return('Cliente excluido!');
    }
}
