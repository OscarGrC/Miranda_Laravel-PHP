<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class Resource extends Controller
{
 
    // Mostrar todas las actividades
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    // Mostrar el formulario para crear una actividad (opcional en APIs)
    public function create()
    {
        return view('activities.create');
    }

    // Guardar una nueva actividad
    public function store(Request $request)
    {  
          $validatedData = $request->validate([
        'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
        'user_id' => 'required|exists:users,id',
        'datetime' => 'required|date',
        'notes' => 'nullable|string',
        'satisfaction' => 'nullable|integer|min:0|max:10',
    ]);

    // Convertimos `paid` a booleano de forma segura
    $validatedData['paid'] = $request->has('paid');

    // Guardamos la actividad
    Activity::create($validatedData);

    return redirect()->route('activities.index')->with('success', 'Actividad creada con éxito.');
    }

    

    // Mostrar una actividad específica
    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.showById', compact('activity'));
    }

    // Mostrar el formulario para editar una actividad
    public function edit($id)
    {
        $activity = Activity::findOrFail($id); 
        return view('activities.edit', compact('activity'));
    }

    // Actualizar una actividad
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'sometimes|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'sometimes|exists:users,id',
            'datetime' => 'sometimes|date',
            'paid' => 'sometimes|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->update($validatedData);

        return redirect()->route('activities.index')->with('success', 'Actividad Modificada con éxito.');
    }

    // Eliminar una actividad
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return response()->json(['message' => 'Actividad eliminada']);
    }
}
