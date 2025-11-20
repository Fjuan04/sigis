<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use Illuminate\Support\Facades\App;
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

        if(Auth::attempt($datos)){
            $user = Auth::user();
            $items = Item::all();
            return redirect()->route('dashboard', compact('items'));
        }else {
            return redirect()->back()->withErrors(['error'=> 'Credenciales invalidas']);
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('dashboard')->withErrors(['ok'=>'Sesion cerrada']);
    }
}
