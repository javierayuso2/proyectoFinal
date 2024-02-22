<h1>Resumen de Actividades</h1>

@foreach ($actividades as $fecha => $actividadesFecha)
    <h2>{{ $fecha }}</h2>
    <ul>
        @foreach ($actividadesFecha as $actividad)
            <li>{{ $actividad->nombre }}</li>
        @endforeach
    </ul>
@endforeach
