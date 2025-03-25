<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Actividad</title>
</head>
<body>

    <h1>Editar Actividad</h1>

    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Tipo:</label>
        <input type="text" name="type" value="{{ $activity->type }}" required><br><br>

        <label>Usuario ID:</label>
        <input type="number" name="user_id" value="{{ $activity->user_id }}" required><br><br>

        <label>Fecha y Hora:</label>
        <input type="datetime-local" name="datetime" value="{{ \Carbon\Carbon::parse($activity->datetime)->format('Y-m-d\TH:i') }}" required><br><br>

        <label>Pagado:</label>
        <input type="checkbox" name="paid" {{ $activity->paid ? 'checked' : '' }}><br><br>

        <label>Notas:</label>
        <textarea name="notes">{{ $activity->notes }}</textarea><br><br>

        <label>Satisfacción (0-10):</label>
        <input type="number" name="satisfaction" min="0" max="10" value="{{ $activity->satisfaction }}"><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('activities.index') }}">Volver al listado</a>

</body>
</html>
