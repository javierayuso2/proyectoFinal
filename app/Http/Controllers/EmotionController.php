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
        // Validación de datos
        $request->validate([
            'alias' => 'required|string|max:255',
            'codigo' => 'required|string|max:255|unique:users',
        ]);
    
        // Crear el usuario
        $user = User::create([
            'alias' => $request->alias,
            'codigo' => $request->codigo,
        ]);
    
        // Redirigir a la vista de éxito de registro
        return redirect()->route('registration_success');
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

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'activity_id' => 'required',
            'emotion_state_id' => 'required|array',
            'info' => 'nullable|string',
        ]);

          // Crear una nueva instancia de Activity y guardar en la base de datos
                $activity = new Activity();
                $activity->activity_id = $request->activity_id;
                $activity->emotion_state_id = implode(',', $request->emotion_state_id);
                $activity->info = $request->info;
                $activity->save();

    // Redirigir a la vista de éxito de actividad
                return redirect()->route('activity_success');
}


    public function summary()
    {
        return redirect()->route('search_results');
    }
    
    
    public function success()
{
    return view('activity_success');
}

    public function searchResults()
    {
        $date = date('Y-m-d'); 
        $activities = ActivityRegistration::whereDate('date', $date)->get();

        return view('search_results', compact('activities', 'date'));
    }

}


