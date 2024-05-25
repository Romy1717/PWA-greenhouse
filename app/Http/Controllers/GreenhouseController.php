<?php

namespace App\Http\Controllers;

use App\Models\TemperatureHumidity;
use Illuminate\Http\Request;

class GreenhouseController extends Controller
{
    public function showTemperature()
    {
        // Obtener el último registro de temperatura
        $latestTemperature = TemperatureHumidity::latest('created_at')->value('temperature');
        
        // Obtener el último registro de humedad
        $latestHumidity = TemperatureHumidity::latest('created_at')->value('humidity');
        
        // Obtener el último registro para setT y setH
        $latestRecord = TemperatureHumidity::latest('created_at')->first();
        
        // Obtener todos los registros de temperatura y humedad
        $temperatureHumidityData = TemperatureHumidity::all();
    
        // Inicializar arrays para los datos de temperatura y humedad
        $temperatureData = $temperatureHumidityData->pluck('temperature')->toArray();
        $humidityData = $temperatureHumidityData->pluck('humidity')->toArray();
        $dates = $temperatureHumidityData->pluck('created_at')->map(function ($item) {
            return $item->format('l'); // Obtener el día de la semana
        })->toArray();
    
        return view('greenhouse', [
            'latestTemperature' => $latestTemperature,
            'latestHumidity' => $latestHumidity,
            'TemperatureHumidity' => $temperatureHumidityData,
            'latestRecord' => $latestRecord, // Pasar el último registro a la vista
            'temperatureData' => $temperatureData,
            'humidityData' => $humidityData,
            'dates' => $dates,
        ]);
    }
    

    public function updateSetValues(Request $request)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'setT' => 'required|numeric',
            'setH' => 'required|numeric',
        ]);
    
        // Obtener todos los registros de temperatura y humedad
        $records = TemperatureHumidity::all();
    
        // Actualizar los valores de setT y setH en cada registro
        foreach ($records as $record) {
            $record->update([
                'setT' => $validated['setT'],
                'setH' => $validated['setH'],
            ]);
        }
    
        return redirect()->route('showTemperature')->with('success', 'Valores actualizados correctamente');
    }
}

