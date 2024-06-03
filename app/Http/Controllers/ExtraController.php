<?php

namespace App\Http\Controllers;

use App\Models\extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function index()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('extra') . view('tempaltes.footer');
    }

    public function add(Request $request)
    {
        extra::create([
            'extra' => $request['extra'],
            'preco' => $request['preco']
        ]);

        return redirect(route('extra'));
    }
    
    public function del(Request $request)
    {
        extra::find($request['id'])->delete();

        return redirect(route('extra'));
    }
    
    public function update(Request $request)
    {
        extra::find($request['id'])->update([
            'extra' => $request['extra'],
            'preco' => $request['preco']
        ]);

        return redirect(route('extra'));
    }
}
