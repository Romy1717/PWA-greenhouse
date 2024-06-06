<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\TemperatureHumidity;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage;

class ArduinoController extends Controller
{
    public function sendData()
    {
        // Obtén el último registro de la tabla temperature_humidity
        $data = TemperatureHumidity::latest()->first();
        
        if (!$data) {
            return response()->json([
                'message' => 'No se encontraron datos en la tabla temperature_humidity',
            ], 404);
        }

        // Compara las variables temperature y setT
        if ($data->temperature > $data->setT) {
            $alert = 'Temperatura alta';
            $state = '1'; // 1 para alerta de alta temperatura
        } elseif ($data->temperature < $data->setT) {
            $alert = 'Temperatura baja';
            $state = '-1'; // -1 para alerta de baja temperatura
        } else {
            $alert = 'Temperatura normal';
            $state = '0'; // 0 para temperatura normal
        }

        // Crear el JSON con los datos
        $jsonData = [
            'temperature' => $data->temperature,
            'humidity' => $data->humidity,
            'setT' => $data->setT,
            'setH' => $data->setH,
            'alert' => $alert,
            'state' => $state,
        ];

        // Convertir el array a JSON
        $jsonContent = json_encode($jsonData, JSON_PRETTY_PRINT);

        // Guardar el JSON en un archivo
        $fileName = 'arduino_data.json';
        Storage::disk('local')->put($fileName, $jsonContent);

        // Guardar los datos en la tabla notifications
        Notification::create([
            'temperature' => $data->temperature,
            'humidity' => $data->humidity,
            'setT' => $data->setT,
            'setH' => $data->setH,
            'alert' => $alert,
            'state' => $state,
        ]);

        // Dirección IP y puerto del Arduino
        $url = ''; // Cambia esta dirección IP y puerto según tu configuración

        $client = new Client();
        
        try {
            $response = $client->post($url, [
                'json' => $jsonData, // Envía los datos al Arduino
            ]);

            // Procesa la respuesta si es necesario
            $responseBody = json_decode($response->getBody(), true);
            
            return response()->json([
                'message' => 'Datos enviados con éxito al Arduino',
                'response' => $responseBody,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al enviar datos al Arduino',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
