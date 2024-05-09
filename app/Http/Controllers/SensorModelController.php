<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use App\Models\Modeloss;
use App\Models\Sensores; // Asegúrate de importar el modelo Sensores
use Illuminate\Http\Request;

class SensorModelController extends Controller
{
    public function index()
    {
        // Obtener todos los modelos de la base de datos paginados
        $modelos = Modelos::paginate(10); // Cambia 10 por el número de resultados por página que desees
     
        // Obtener todos los sensores para pasarlos a la vista
        $sensores = Sensores::all();
       
        // Enviar los datos a la vista 'modelos.index'
        return view('sensormodel', compact('modelos', 'sensores'));
    }
    
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'sensor_id' => 'required|exists:sensores,id', // Validar que el sensor exista en la base de datos
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'maker' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'measurement_units' => 'required|string|max:255',
        ]);
    
        // Crear un nuevo modelo en la base de datos
        Modelos::create([
            'sensor_id' => $request->sensor_id,
            'brand' => $request->brand,
            'model' => $request->model,
            'maker' => $request->maker,
            'description' => $request->description,
            'measurement_units' => $request->measurement_units,
        ]);

        return redirect()->route('sensormodel.index')->with('success', 'Modelos creado exitosamente');
    }
    
    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
        $request->validate([
            'sensor_id' => 'required|exists:sensores,id', // Validar que el sensor exista en la base de datos
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'maker' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'measurement_units' => 'required|string|max:255',
        ]);
    
        // Buscar el modelo a actualizar
        $modelo = Modelos::findOrFail($id);
    
        // Actualizar el modelo
        $modelo->update([
            'sensor_id' => $request->sensor_id,
            'brand' => $request->brand,
            'model' => $request->model,
            'maker' => $request->maker,
            'description' => $request->description,
            'measurement_units' => $request->measurement_units,
        ]);
    
        // Redirigir de vuelta a la página de modelos con un mensaje de éxito
        return redirect()->route('sensormodel.index')->with('success', 'Modelos actualizado exitosamente');
    }

    public function destroy($id)
    {
        // Buscar el modelo a eliminar
        $modelo = Modelos::findOrFail($id);
    
        // Eliminar el modelo
        $modelo->delete();
    
        // Redirigir de vuelta a la página de modelos con un mensaje de éxito
        return redirect()->route('sensormodel.index')->with('success', 'Modelos eliminado exitosamente');
    }
}
