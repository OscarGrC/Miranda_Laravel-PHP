<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Actividades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .success-message {
            color: green;
            margin-bottom: 20px;
        }
        .error-message {
            color: red;
            margin-bottom: 20px;
        }
        .activity-count {
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Listado de Actividades</h1>

    <!-- Mostrar mensaje de éxito si existe en la sesión -->
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mostrar mensaje de error si existe en la sesión -->
    @if(session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @endif

    <!-- Mostrar la cantidad total de actividades -->
    <div class="activity-count">
        <p>Total de actividades: {{ $activities->count() }}</p>
    </div>

    <!-- Tabla para mostrar las actividades -->
    <table>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Usuario ID</th>
                <th>Fecha y Hora</th>
                <th>Pagado</th>
                <th>Satisfacción</th>
                <th>Notas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ ucfirst($activity->type) }}</td>
                    <td>{{ $activity->user_id }}</td>
                    <td>{{ \Carbon\Carbon::parse($activity->datetime)->format('d-m-Y H:i') }}</td>
                    <td>{{ $activity->paid ? 'Sí' : 'No' }}</td>
                    <td>{{ $activity->satisfaction ?? 'N/A' }}</td>
                    <td>{{ $activity->notes }}</td>
                    <td>
                        <a href="{{ route('activities.show', $activity->id) }}">Ver</a>
                        <a href="{{ route('activities.edit', $activity->id) }}">Editar</a>
                        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Enlace para crear una nueva actividad -->
    <br>
    <a href="{{ route('activities.create') }}">Crear nueva actividad</a>

</body>
</html>
