<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Actividades</title>
</head>
<body>
    <h1>Resumen de Actividades</h1>
    <form action="{{ route('activity.summary.show') }}" method="POST">
        @csrf
        <label for="date">Selecciona una fecha:</label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Buscar</button>
    </form>

    @if(isset($activityNames))
        <h2>Actividades en la fecha {{ $date }}:</h2>
        <ul>
            @foreach($activityNames as $activityName)
                <li>{{ $activityName }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
