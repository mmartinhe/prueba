<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    public function frmLogeo(){
        //le llevo a formulario de logearse que esta en welcome
        return view('usuarios.registro');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view ('home');
        }
        return view('welcome')->with('notice','Usuario no registrado');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        //return "Usuario deslogeado";
    }
}

