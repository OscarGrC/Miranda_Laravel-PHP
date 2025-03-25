<!-- resources/views/activities/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Actividad</title>
</head>
<body>
    <h1>Crear Actividad</h1>

    <!-- Mostrar mensaje si todo sale bien -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario de creación -->
    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <label for="type">Tipo:</label>
        <select name="type" id="type" required>
            <option value="surf">Surf</option>
            <option value="windsurf">Windsurf</option>
            <option value="kayak">Kayak</option>
            <option value="atv">ATV</option>
            <option value="hot air balloon">Globo Aerostático</option>
        </select>
        <br>

        <label for="user_id">ID del Usuario:</label>
        <input type="number" name="user_id" id="user_id" required>
        <br>

        <label for="datetime">Fecha y Hora:</label>
        <input type="datetime-local" name="datetime" id="datetime" required>
        <br>

        <label for="paid">Pagado:</label>
        <input type="checkbox" name="paid" id="paid">
        <br>

        <label for="notes">Notas:</label>
        <textarea name="notes" id="notes"></textarea>
        <br>

        <label for="satisfaction">Satisfacción (0-10):</label>
        <input type="number" name="satisfaction" id="satisfaction" min="0" max="10" step="1">
        <br>

        <button type="submit">Crear Actividad</button>
    </form>
</body>
</html>
