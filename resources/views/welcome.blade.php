<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="alias" placeholder="Alias">
        <input type="text" name="codigo" placeholder="Codigo">
        <button type="submit">Register</button>
    </form>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <button type="submit">Login</button>
    </form>
</body>
</html>

