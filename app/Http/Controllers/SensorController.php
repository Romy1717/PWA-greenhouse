<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Sensores;

class SensorController extends Controller
{
    /**
     * Display a listing of the sensors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los sensores
        $sensores = Sensores::all();
        
        // Retornar la vista con los datos de los sensores
        return view('sensors', compact('sensores'));
    }


    /**
     * Store a newly created sensor in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string', 
        ]);

        // Crear un nuevo sensor
        $sensor = new Sensores();
        $sensor->type = $request->type; // Cambiado de 'tipo' a 'type'
        $sensor->description = $request->description; // No hay cambios aquí
        $sensor->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('sensors.index')->with('success', 'Sensor creado correctamente');
    }
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string', 
        ]);

        // Buscar el sensor por su ID
        $sensor = Sensores::findOrFail($id);

        // Actualizar los datos del sensor
        $sensor->type = $request->type;
        $sensor->description = $request->description;
        $sensor->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('sensors.index')->with('success', 'Sensor actualizado correctamente');
    }

    /**
     * Remove the specified sensor from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Buscar el sensor por su ID y eliminarlo
        $sensor = Sensores::findOrFail($id);
        $sensor->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('sensors.index')->with('success', 'Sensor eliminado correctamente');
    }
}
