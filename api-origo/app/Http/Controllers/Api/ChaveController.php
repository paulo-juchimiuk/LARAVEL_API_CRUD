<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Chave;

class ChaveController extends Controller
{
    public function add(Request $request){
        
        try {
            $chave = new Chave();

            $chave->cliente = $request->cliente;
            $chave->plano = $request->plano;


            $chave->save();

            return ['retorno' => 'ok'];

        } catch (\Exception $erro) {
            
            return ['retorno' => 'erro', 'details' => $erro];
        }

    }
}
