<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('clientes') . view('tempaltes.footer');
    }

    public function addindex()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('cadastroClientes') . view('tempaltes.footer');
    }

    public function add(Request $request)
    {
        cliente::create([
            'nome' => $request['nome'],
            'CPF' => $request['CPF'],
            'contato' => $request['contato'],
            'CEP' => $request['cep'],
            'logradouro' => $request['logradouro'],
            'bairro' => $request['bairro'],
            'localidade' => $request['localidade'],
            'UF' => $request['uf'],
            'ibge' => $request['ibge'],
            'numeroCasa' => $request['numero']
        ]);

        return redirect(route('clientes'));
    }

    public function update(Request $request)
    {
        cliente::find($request['id'])->update([
            'nome' => $request['nome'],
            'CPF' => $request['CPF'],
            'contato' => $request['contato'],
            'CEP' => $request['cep'],
            'logradouro' => $request['logradouro'],
            'bairro' => $request['bairro'],
            'localidade' => $request['localidade'],
            'UF' => $request['uf'],
            'ibge' => $request['ibge'],
            'numeroCasa' => $request['numero']
        ]);

        return redirect(route('clientes'));
    }
    
    public function del(Request $request)
    {
        cliente::find($request['id'])->delete();
        return redirect(route('clientes'));
    }
}
