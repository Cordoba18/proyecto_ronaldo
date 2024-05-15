<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index(){
        return view('usuario.login');

    }

    //funcion que permite realizar el inicio de sesion
    public function logueo(Request $request){

        $email = $request->email;
       $credentials = request()->only('email', 'password');
       //validamos si el usuario esta activo
       $Usuario = User::where('email', $email)->first();
       if ($Usuario) {
        //validamos las credenciales de autenticacion
        if (Auth::attempt($credentials)) {
            //generamos la session
            request()->session()->regenerate();
            //generamos el reporte

            return redirect()->route('inicio')->with('message', "Bienvenido $Usuario->nombres!");

           }else{
            return redirect()->route('login')->with('message_error', 'Credenciales incorrectas');

           }
       }else {
        return redirect()->route('login')->with('message_error', 'Usuario no existente');
       }

    }

    //funcion que permite cerrar sesion
    public function logout(Request $request){


        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flush();
        Auth::logout();
        return redirect()->route('login');


    }


}
