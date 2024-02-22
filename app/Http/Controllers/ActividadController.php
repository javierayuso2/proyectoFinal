<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Activity;
use App\Models\EstadoAnimo;
use App\Models\RegistroEstado;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Activity::all();
        return view('actividades.index', compact('actividades'));
    }

    public function guardarRegistro(Request $request)
    {
        // Lógica para guardar el registro de estado
    }

    public function resumen()
    {
        $actividades = Activity::orderBy('fecha')->get()->groupBy('fecha');
        return view('actividades.resumen', compact('actividades'));
    }
}
