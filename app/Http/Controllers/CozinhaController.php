<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CozinhaController extends Controller
{
    public function index()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('cozinha') . view('tempaltes.footer');
    }
}
