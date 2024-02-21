<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Actividades del día {{ $date }}</h1>
    @foreach ($activities as $activity)
        <p>{{ $activity->name }}</p>
        <!-- Mostrar otros detalles de la actividad según sea necesario -->
    @endforeach
</body>
</html>
