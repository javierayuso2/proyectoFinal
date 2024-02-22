<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/proyectofinal1/public/css/estilosAyuso.css">
    <link rel="stylesheet" href="http://localhost/proyectofinal1/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/proyectofinal1/public/css/bootstrap.min.css">
    <link rel="js" href="http://localhost/proyectofinal1/public/js">
    <link rel="images" href="http://localhost/proyectofinal1/public/imagenes">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="http://localhost/proyectofinal1/public/js/ScriptTrabajoFinal.js" type="text/javascript"></script>

    <link href="https://fonts.googleapis.com/css?family=lato:300i,400,700&display=swap" rel="stylesheet">
        <!--FUENTES E ICONOS DE GOOGLE-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <title>Welcome</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="cabecera">
                <div class="col-12 col-md-12 col-sm-12">
                    <img src="/proyectofinal1/public/imagenes/logo.jpg" alt="centered image" id="logo">
                    <h2>Inicio de sesión</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>Introduce tus datos de registro</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-4">
                    <input type="text" name="alias" required placeholder="Nombre/Alias" class="form-control cajaText" id="nombre">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4 offset-4">
                    <input type="text" name="codigo" required placeholder="Codigo/Contraseña" class="form-control cajaText" id="contraseña">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4 offset-4">
                    <button type="submit" class="btnSig1">Registrarse</button>
                </div>
            </div>
        </form>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-4 offset-4">
                    <button type="submit" class="btnSig2">Iniciar Sesión</button>
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
