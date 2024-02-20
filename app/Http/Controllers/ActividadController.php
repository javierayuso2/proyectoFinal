<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\EstadoAnimo;
use App\Models\RegistroEstado;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    public function guardarRegistro(Request $request)
    {
        // Lógica para guardar el registro de estado
    }

    public function resumen(Request $request)
    {
        // Lógica para generar el resumen
    }
}
