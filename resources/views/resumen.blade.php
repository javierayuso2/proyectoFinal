

<form action="{{ route('resumen.actividades') }}" method="get">
    <input type="text" name="fecha" placeholder="Fecha" required>
    <button type="submit">Buscar</button>
</form>

@if(isset($actividades))
    <h2>Actividades para {{ $fecha }}</h2>
    <ul>
        @foreach($actividades as $actividad)
            <li>{{ $actividad->nombre }} - {{ $actividad->hora_inicio }} - {{ $actividad->hora_fin }}</li>
        @endforeach
    </ul>
@endif
