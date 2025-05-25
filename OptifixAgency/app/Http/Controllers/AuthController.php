<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ],[
            'email.required' => 'El email es requerido',
            'email.email' => 'El email no es válido',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password.max' => 'La contraseña debe tener menos de 20 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('noticias.index'))
            ->with('feedback.message', 'Bienvenido de nuevo ' . Auth::user()->name);
        }

        return redirect()->back()->withInput()->with('feedback.message', 'Credenciales incorrectas');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate(); // Invalida la sesión actual
        $request->session()->regenerateToken(); // Genera un nuevo token de sesión

        return redirect()->route('auth.login')->with('feedback.message', 'Sesión cerrada correctamente');
    }
}
