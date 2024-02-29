<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Activity;
use App\Models\EmotionState;
use App\Models\ActivityRegistration;

class EmotionController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register(Request $request)
    {
        $request->validate([
            'alias' => 'required|string|max:255',
            'codigo' => 'required|string|max:255|unique:users',
        ]);

        $user = User::create([
            'alias' => $request->alias,
            'codigo' => $request->codigo,
        ]);

        return redirect()->route('home')->with('success', 'Registro exitoso.');
    }

    public function login(Request $request)
    {
        // Implementa la lógica de inicio de sesión si es necesario
        return redirect()->route('activity');
    }

    public function activity()
    {
        $activities = Activity::all();
        $emotions = EmotionState::all();
        return view('activity', compact('activities', 'emotions'));
    }

// Controlador
public function saveActivity(Request $request)
{
    // Validar los datos recibidos
    $request->validate([
        'activity_id' => 'required|string',
        'info' => 'nullable|string',
    ]);

    // Obtener los valores de los checkbox como una cadena
    $emotion_state_ids = implode(',', $request->input('emotion_state_id'));

    // Crear una nueva instancia de Activity
    $activity = new Activity([
        'activity_id' => $request->activity_id,
        'emotion_state_id' => $emotion_state_ids, // Guardar los valores de los checkbox
        'info' => $request->info,
    ]);
    $activity->save();

    // Redireccionar a la vista 'activity' con los datos necesarios
    return redirect()->route('activity');
}


    
    

    public function summary()
    {
        return view('summary');
    }

    public function searchResults()
    {
        $activities = Activity::all(); // Obtener todos los registros de la tabla activities
        return view('search_results', compact('activities'));
    }
    
    
}