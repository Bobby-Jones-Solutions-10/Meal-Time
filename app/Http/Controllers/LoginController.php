<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function autenticate(Request $request): RedirectResponse
    {
        $credential = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Login ou senha invalidos',
        ])->onlyInput('email');
    }

    public function Index()
    {
        return view('tempaltes.head') . view('login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('index'));
    }
}
