<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index()
    {
        return view('actividades.index');
    }

    public function resumen()
    {
        $actividades = Actividad::orderBy('fecha')->get()->groupBy('fecha');
        return view('actividades.resumen', compact('actividades'));
    }
}
