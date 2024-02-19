<!-- resources/views/actividad.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Actividades</title>
</head>
<body>
    <h1>Registro de Actividades</h1>

    <form action="{{ route('registroActividades.submit') }}" method="POST">
        @csrf

        <!-- Lista de actividades -->
        <label for="actividad">Selecciona una actividad:</label>
        <select name="actividad" id="actividad">
            <option value="1">Actividad 1</option>
            <option value="2">Actividad 2</option>
            <option value="3">Actividad 3</option>
            <!-- Agrega más opciones según sea necesario -->
        </select><br><br>

        <!-- Selección de emojis -->
        <label for="emoji">Selecciona un emoji:</label><br>
        <input type="radio" id="emoji1" name="emoji" value="😀" required>
        <label for="emoji1">😀</label><br>
        <input type="radio" id="emoji2" name="emoji" value="😊">
        <label for="emoji2">😊</label><br>
        <input type="radio" id="emoji3" name="emoji" value="😎">
        <label for="emoji3">😎</label><br>
        <input type="radio" id="emoji4" name="emoji" value="🥳">
        <label for="emoji4">🥳</label><br><br>

        <!-- Botones -->
        <button type="submit" name="action" value="enviar">Enviar</button>
        <a href="{{ route('resumen.index') }}"><button type="button">Mostrar Resumen</button></a>
    </form>
</body>
</html>
