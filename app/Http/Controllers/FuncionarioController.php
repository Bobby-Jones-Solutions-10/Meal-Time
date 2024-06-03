<?php

namespace App\Http\Controllers;

use App\Models\funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('funcionarios') . view('tempaltes.footer');
    }

    public function add(Request $request)
    {
        
        funcionario::create([
            'nome' => $request['nome'],
            'cargo' => $request['cargo'],
            'contato'=> $request['contato'],
            'CEP' => $request['cep'],
            'logradouro'=> $request['logradouro'],
            'localidade' => $request['bairro'],
            'bairro' => $request['localidade'],
            'UF' => $request['uf'],
            'ibge' => $request['ibge'],
            'numeroCasa' => $request['numero']
        ]);

        return redirect(route('funcionarios'));
    }

    public function update(Request $request)
    {
        funcionario::find($request['id'])->update([
            'nome' => $request['nome'],
            'cargo' => $request['cargo'],
            'contato'=> $request['contato'],
            'CEP' => $request['cep'],
            'logradouro'=> $request['logradouro'],
            'localidade' => $request['bairro'],
            'bairro' => $request['localidade'],
            'UF' => $request['uf'],
            'ibge' => $request['ibge'],
            'numeroCasa' => $request['numero']
        ]);

        return redirect(route('funcionarios'));
    }

    public function del(Request $request)
    {
        try {
            funcionario::find($request['id'])->delete();
        } catch (\Throwable $th) {
            echo '<script> alert("funcionario não encontrado") </script>';
        }

        return redirect(route('funcionarios'));
    }
}
