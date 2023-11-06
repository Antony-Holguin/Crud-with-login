<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    
    public function index(){
        return view("auth.login");
    }

    public function store(Request $request){
        //Validar 
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

       if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return redirect()->back()->with('error', 'Correo o password incorrecto');
       }

       return redirect()->route('dashboard.index');
    }
}
