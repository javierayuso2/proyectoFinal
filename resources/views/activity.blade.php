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
                    <h2>Actividad</h2>
                </div>
            </div>
        </div>
        <hr>
        <div class="estado">
            <div class="row" style="text-align: center;">
                <form action="{{ route('save.activity') }}" method="POST">
                    @csrf
                    <div class="col-12 col-md-12">
                        <h5>Elija una actividad</h5><br>
                        <select name="activity_id" class="cajaText" id="actividad">
                            <option>Desayunar</option>
                            <option>Comer</option>
                            <option>Cenar</option>
                            <option>Entrenar</option>
                            <option>Dormir</option>
                            <option>Estudiar</option>
                            <option>Salir de fiesta</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12"></div>
                    <br><hr>
                    <div class="row" style="text-align: center;">
                        <div class="col-12 col-md-12">
                            <h5>  Elija un estado de ánimo</h5><br>
                            <label class="checkeable">
                                <input type="checkbox" name="emotion_state_id" value="1"/>
                                <img src="imagenes/riendo.png"/>
                            </label>
                            <!-- Aquí van los demás checkboxes -->
                        </div>
                    </div>
                    <div class="col-12 col-md-12"></div><br>
                    <div class="row">
                        <div class="col-6 col-md-6 offset-3">
                            <textarea class="txtArea form-control" name="info" placeholder="Escribe una descripcion de tu estado emocional"></textarea><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-3">
                            <button type="submit" class="btnSig3">Enviar registro</button>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <!-- Agrega el botón de resumen -->
            <div class="row">
                <div class="col-12 col-md-12">
                    <a href="{{ route('activity.summary') }}" class="btn btn-primary">Resumen</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
