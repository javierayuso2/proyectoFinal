<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
</head>
<body>
    <h1>Summary</h1>
    <form action="{{ route('activity.search') }}" method="GET">
        <label for="date">Seleccione una fecha:</label>
        <input type="date" name="date" id="date">
        <button type="submit">Buscar</button>
    </form>
</body>
</html>
