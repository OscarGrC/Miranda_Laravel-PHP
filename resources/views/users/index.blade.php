<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
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

    <h1>Listado de Usuarios</h1>

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

    <!-- Tabla para mostrar los usuarios -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y H:i') }}</td>
                    <td>
                        <button onclick="location.href='{{ route('users.show', $user->id) }}'" style="padding: 5px 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                            Ver
                        </button>
                        <button onclick="location.href='{{ route('users.edit', $user->id) }}'" style="padding: 5px 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
                            Editar
                        </button>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 10px; background-color: rgb(238, 17, 17); color: white; border: none; border-radius: 5px; cursor: pointer;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Mostrar la cantidad total de usuarios -->
    <div class="activity-count">
        <p>Total de usuarios: {{ $users->count() }}</p>
    </div>

    <!-- Enlace para crear un nuevo usuario -->
    <br>
    <a href="{{ route('users.create') }}">Crear nuevo usuario</a>

</body>
</html>
