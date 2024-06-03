<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return view('tempaltes.head') . view('tempaltes.nav') . view('config') . view('tempaltes.footer');
    }
}
