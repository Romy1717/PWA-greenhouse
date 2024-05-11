<?php

namespace App\Http\Controllers;

use App\Models\TemperatureHumidity;

class GreenhouseController extends Controller
{
    public function showTemperature()
    {
        // Obtener el último registro de temperatura
        $latestTemperature = TemperatureHumidity::latest('created_at')->value('temperature');
        
        // Obtener el último registro de humedad
        $latestHumidity = TemperatureHumidity::latest('created_at')->value('humidity');
        
        // Obtener todos los registros de temperatura y humedad
        $TemperatureHumidity = TemperatureHumidity::all();
    
        return view('greenhouse', [
            'latestTemperature' => $latestTemperature,
            'latestHumidity' => $latestHumidity,
            'TemperatureHumidity' => $TemperatureHumidity
        ]);
    }

}
