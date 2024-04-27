<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Humidity;
use App\Models\Temperature; // Asegúrate de importar el modelo Temperature

class HumidityController extends Controller
{
    public function index()
    {
        $ultima_humedad = $this->ultimaHumedad();
        $humedades = Humidity::latest()->get();
        $temperaturas = Temperature::latest()->get(); // Obtén las temperaturas
        return view('greenhouse', compact('ultima_humedad', 'humedades', 'temperaturas'));
    }

    public function ultimaHumedad()
    {
        // Obtener la última humedad registrada
        return Humidity::latest()->value('moist_quality');
    }
}
