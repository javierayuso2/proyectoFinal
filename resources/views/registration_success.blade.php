<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/proyectofinal1/public/css/estilosAyuso.css">
    <link rel="stylesheet" href="http://localhost/proyectofinal1/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/proyectofinal1/public/css/bootstrap.min.css">
    <link rel="js" href="http://localhost/proyectofinal1/public/js">
    <link rel="images" href="http://localhost/proyectofinal1/public/imagenes">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/ScriptTrabajoFinal.js" type="text/javascript"></script>

        <link href="https://fonts.googleapis.com/css?family=lato:300i,400,700&display=swap" rel="stylesheet">
        <!--FUENTES E ICONOS DE GOOGLE-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
    <div class="container">
        <div class="cabecera">
            <!-- Cabecera -->
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <img src="imagenes/logo.jpg" alt="centered image"  id="logo">
                    <h2>Registro exitoso</h2>
                </div>
            </div>
        </div>
        <hr>
        <div class="mensaje">
            <div class="row">
                <div class="col-12 col-sm-4 tic">
                    <img id="imgTic" src="imagenes/ticverde.jpg">
                </div>
                <div class="col-12 col-sm-8 msj">
                    <h2 class="txtMensaje">Los datos se enviaron correctamente</h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-4 enlace">
                    <a href="{{ route('activity') }}" style="text-decoration: none ">Volver</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
