<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temperature;

class TemperatureController extends Controller
{
    public function index()
    {
        $ultima_temperatura = $this->ultimaTemperatura();
        $temperaturas = Temperature::latest()->get();
        return view('greenhouse', compact('ultima_temperatura', 'temperaturas'));
    }

    public function ultimaTemperatura()
    {
        // Obtener la última temperatura registrada
        return Temperature::latest()->value('temperature');
    }
}
