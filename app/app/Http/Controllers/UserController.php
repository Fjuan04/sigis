<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $request){
        $datos = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user){
            return redirect()->back()->withErrors(['no hay usuarios'=>'No hay usuarios registrados con este email']);
        }

        if(!Hash::check($request->password, $user->password)){
            return redirect()->back()->withErrors(['no hay usuarios'=>'Contraseña Incorrecta']);
        }

        return redirect()->back()->withErrors(['ok'=>"Bienvenido $user->name"]);
        
    }
}
