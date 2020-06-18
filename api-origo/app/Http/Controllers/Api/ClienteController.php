<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cliente;

class ClienteController extends Controller
{
    public function create(Request $request){
        
        try {
            $cliente = new Cliente();

            $cliente->nome = $request->nome;
            $cliente->email = $request->email;
            $cliente->telefone = $request->telefone;
            $cliente->estado = $request->estado;
            $cliente->cidade = $request->cidade;
            $cliente->nascimento = $request->nascimento;

            $cliente->save();

            return ['retorno' => 'ok'];

        } catch (\Exception $erro) {
            
            return ['retorno' => 'erro', 'details' => $erro];
        }

    }

    public function show(){
        $cliente = Cliente::all();
        return $cliente;
    }

    public function select($id){
        $cliente = Cliente::find($id);
        return $cliente;
    }

    public function update(Request $request, $id){

        try {
            $cliente = Cliente::find($id);

            $cliente->nome = $request->nome;
            $cliente->email = $request->email;
            $cliente->telefone = $request->telefone;
            $cliente->estado = $request->estado;
            $cliente->cidade = $request->cidade;
            $cliente->nascimento = $request->nascimento;

            $cliente->save();

            return ['retorno' => 'ok'];

        } catch (\Exception $erro) {
            
            return ['retorno' => 'erro', 'details' => $erro];
        }        

    }

    public function delete($id){

        try {
            $cliente = Cliente::find($id);
            $cliente->delete();

            return ['retorno' => 'ok'];

        } catch (\Exception $erro) {
            
            return ['retorno' => 'erro', 'details' => $erro];
        }   

    }
}
