<?php

namespace App\Http\Controllers;

use App\Models\extra;
use App\Models\pedido;
use App\Models\pizza;
use App\Models\sabor;
use App\Models\tamanho;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('pedidos') . view('tempaltes.footer');
    }

    public function add(Request $request)
    {
        $precoSabor = sabor::where('id',$request['sabor'])->select('preco')->first();
        $precoTamanho = tamanho::where('id',$request['tamanho'])->select('preco')->first();
        $precoExtra = extra::where('id',$request['extra'])->select('preco')->first();
        
        $preco = $precoSabor['preco'] + $precoTamanho['preco'] + $precoExtra['preco'];

        
        $pizza = pizza::create([
            'sabores_id' => $request['sabor'],
            'extras_id' => $request['extra'],
            'tamanhos_id' => $request['tamanho']
        ]);

        pedido::create([
            'pizzas_id' => $pizza->id,
            'clientes_id' => $request['cliente'],
            'preco' => $preco,
            'tipo' => $request['retirada']
        ]);

        return redirect(route('cozinha'));
    }

    public function councluir(Request $request)
    {
        pedido::find($request['id'])->update([
            'pronta' => true
        ]);

        return redirect(route('cozinha'));
    }

    public function del(Request $request)
    {
        pedido::find($request['id'])->delete();

        return redirect(route('cozinha'));
    }
}
