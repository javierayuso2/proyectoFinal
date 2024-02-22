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
        // Aquí puedes implementar la lógica de inicio de sesión si es necesario
        return redirect()->route('activity');
    }

    public function activity()
    {
        $activities = Activity::all();
        $emotions = EmotionState::all();
        return view('activity', compact('activities', 'emotions'));
    }

    public function saveActivity(Request $request)
    {
        $request->validate([
            'activity_id' => 'required|exists:activities,id',
            'emotion_state_id' => 'required|exists:emotion_states,id',
        ]);

        // Suponiendo que tienes autenticación de usuario y tienes acceso al usuario actual
        $user = auth()->user();

        // Guardar la actividad
        $activityRegistration = new ActivityRegistration();
        $activityRegistration->user_id = $user->id;
        $activityRegistration->activity_id = $request->activity_id;
        $activityRegistration->emotion_state_id = $request->emotion_state_id;
        $activityRegistration->date = now(); // Opcional: Puedes personalizar la fecha aquí si es necesario
        $activityRegistration->save();

        return redirect()->back()->with('success', 'Actividad guardada exitosamente.');
    }

    public function summary()
    {
        return view('summary');
    }

    public function search(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $date = $request->input('date');
        $activities = ActivityRegistration::whereDate('date', $date)->get();

        return view('search_results', compact('activities', 'date'));
    }
}
