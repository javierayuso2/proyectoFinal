<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>

    <!-- Formulario de registro -->
    <form action="{{ route('registro.submit') }}" method="POST">
        @csrf
        <label for="alias">Alias:</label>
        <input type="text" id="alias" name="alias" required><br><br>
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required><br><br>

        <!-- Botones -->
        <button type="submit" name="action" value="register">Registrarse</button>
        <a href="{{ route('registroActividades.index') }}"><button type="button">Inicio de sesión</button></a>
    </form>
</body>
</html>
