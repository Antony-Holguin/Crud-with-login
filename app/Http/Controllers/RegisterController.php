<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombres' => ['required', 'min:8','max:30'],
            'apellidos' => ['required', 'min:8','max:30'],
            'email' => ['required', 'unique:users','email'],
            'age' => ['numeric', 'required', ''],
            'sexo' => ['required'],
            'password' => ['required','confirmed','min:8']
        ]);

        User::create([
            'nombres'=> $request->nombres,
            'apellidos' => $request->apellidos,
            'edad' => $request->age,
            'email'=> $request->email,
            'sexo' => $request->sexo,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('register.index')->with('message','Usuario registrado correctamente');
    }
}
