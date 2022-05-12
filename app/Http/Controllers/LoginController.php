<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function logar(Request $request){

        $login = $request->usuario;
        $senha = $request->senha;

        $user = new User();

        $usuario = $user->where('name', $login)->where('password', $senha)->get()->first();

        if(isset($usuario->name)){
            // session_start();
            // $_SESSION['usuario'] = $usuario->name;
            // $_SESSION['email'] = $usuario->email;
            
            return "Usuário(a) ". $usuario->name." identificado(a) !";
        }else{
            // $_SESSION['nome'] = array();
            // $_SESSION['email'] = array();
            return "Usuário não identificado !";
        }
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }
}
