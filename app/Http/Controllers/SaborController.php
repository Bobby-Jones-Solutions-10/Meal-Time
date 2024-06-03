<?php

namespace App\Http\Controllers;

use App\Models\sabor;
use Illuminate\Http\Request;

class SaborController extends Controller
{
    public function index()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('sabores') . view('tempaltes.footer');
    }

    public function add(Request $request)
    {
        sabor::create([
            'sabor' => $request['sabor'],
            'preco' => $request['preco']
        ]);

        return redirect(route('sabor'));
    }
    
    public function del(Request $request)
    {
        sabor::find($request['id'])->delete();

        return redirect(route('sabor'));
    }

    public function update(Request $request)
    {
        sabor::find($request['id'])->update([
            'sabor' => $request['sabor'],
            'preco' => $request['preco']
        ]);
        
        return redirect(route('sabor'));
    }
}
