<?php
// app/Http/Controllers/RegistroController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function index()
    {
        return view('registro');
    }

    public function submit(Request $request)
    {
        if ($request->input('action') == 'register') {
            // Si se presionó el botón "Registrarse"
            $validatedData = $request->validate([
                'alias' => 'required|unique:usuario',
                'codigo' => 'required',
            ]);

            // Comprobar si el usuario ya existe
            $userExists = User::where('alias', $request->input('alias'))->exists();

            if ($userExists) {
                return redirect()->back()->with('error', 'El alias ya está en uso.');
            }

            // Crear nuevo usuario
            $user = new User();
            $user->alias = $request->input('alias');
            $user->codigo = $request->input('codigo');
            $user->save();

            return redirect()->back()->with('success', 'Usuario registrado correctamente.');
        }
    }
}
