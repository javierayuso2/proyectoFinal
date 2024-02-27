<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
<form action="{{ route('search_results') }}" method="GET">
    @csrf
    <div class="form-group">
        <label for="datepicker">Selecciona una fecha:</label>
        <input type="text" id="datepicker" name="date" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de la Actividad</th>
                    <th>Estado de Ánimo</th>
                    <th>Información Adicional</th>
                </tr>
            </thead>
            <tbody id="activitiesList">
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity->id }}</td>
                        <td>{{ $activity->activity_name }}</td>
                        <td>{{ $activity->emotion_state }}</td>
                        <td>{{ $activity->info }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inicializar el Datepicker
            $('#datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd',
                todayHighlight: true
            }).on('changeDate', function(e) {
                // Manejar el cambio de fecha
                var selectedDate = $('#datepicker').val();
                // Redireccionar a la página de búsqueda con la fecha seleccionada
                window.location.href = '/search?date=' + selectedDate;
            });
        });
    </script>
</body>
</html>
