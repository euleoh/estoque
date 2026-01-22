<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request){
        $cliente = Cliente::where('cpf', '=', '$request');
        $cliente = Cliente::create([
            'nome'=> $request-> nome,
            'cpf'=> $request-> cpf,
            'idade'=> $request-> idade
        ]);

        return response()-> json($cliente);
    }

    public function index(){
        $cliente = Cliente::all();

        if(!$cliente){
            return response()-> json(['message'=> 'Cpf duplicado']);
        }


        return response ()-> json($cliente);
    }
    

}
