<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class UserController extends Controller
{
    public function registrarUsuario(Request $request){
        $user =new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= bcrypt($request->password);
        $user->save();
        return view('welcome')->with('notice','usuario registrado. Logeate');

    }
}
