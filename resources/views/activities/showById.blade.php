<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Actividad</title>
</head>
<body>

    <h1>Detalles de la Actividad</h1>

    <p><strong>Tipo:</strong> {{ ucfirst($activity->type) }}</p>
    <p><strong>Usuario ID:</strong> {{ $activity->user_id }}</p>
    <p><strong>Fecha y Hora:</strong> {{ \Carbon\Carbon::parse($activity->datetime)->format('d-m-Y H:i') }}</p>
    <p><strong>Pagado:</strong> {{ $activity->paid ? 'Sí' : 'No' }}</p>
    <p><strong>Notas:</strong> {{ $activity->notes }}</p>
    <p><strong>Satisfacción:</strong> {{ $activity->satisfaction ?? 'N/A' }}</p>

    <br>
    <a href="{{ route('activities.index') }}">
        <button>Volver al listado</button>
    </a>

</body>
</html>
