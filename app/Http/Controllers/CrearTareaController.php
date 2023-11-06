<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CrearTareaController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => ['required', 'max:30', 'min:8'],
            'descripcion' => ['required', 'max:30'],
            'file' => ['required', 'image', 'max:2048']
        ]);

        //Guardar imagen
        $imagenes = $request->file('file')->store('public/imagenes');

        $url = Storage::url($imagenes);

        Task::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'user_id' => auth()->user()->id,
            'imagen' => $url
        ]);

        return redirect()->route('dashboard.index')->with('message', 'Tarea creada exitosamente');
    }

    public function show(Task $tarea)
    {

        return view('crud.show', ['tasks' => $tarea]);
    }

    public function destroy($id)
    {
        Task::destroy($id);

        return redirect()->back();
    }

    public function edit(Task $tarea)
    {
        //$tarea = Task::findOrFail($tarea);
        return view('crud.edit', ['tarea' => $tarea]);
        //return $tarea;
    }

    public function update(Request $request, Task $tarea)
    {
       // dd($request);
       
        $this->validate($request, [
            'titulo' => ['required', 'max:30', 'min:8'],
            'descripcion' => ['required', 'max:30'],
        ]);

        $tarea->updateOrFail($request->all());

        return redirect()->route('dashboard.index')->with('mensajeOk', 'Registro actualizado exitosamente');
    }
}
