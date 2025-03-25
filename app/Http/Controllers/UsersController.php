<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Mostrar todos los usuarios
    public function index()
    {
        $users = User::all(); // Obtener todos los usuarios
        return view('users.index', compact('users'));
    }

    // Mostrar el formulario para crear un nuevo usuario
    public function create()
    {
        return view('users.create');
    }

    // Almacenar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        // Validación
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // Crear el usuario
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado con éxito.');
    }

    // Mostrar un usuario específico
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Mostrar el formulario para editar un usuario
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Actualizar un usuario en la base de datos
    public function update(Request $request, $id)
    {
        // Validación
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:4|confirmed',
        ]);

        // Encontrar el usuario
        $user = User::findOrFail($id);

        // Actualizar los valores
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        // Si la contraseña fue proporcionada, la actualizamos
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario actualizado con éxito.');
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
