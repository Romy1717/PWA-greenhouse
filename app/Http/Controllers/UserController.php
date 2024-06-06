<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function __construct()
    {
        // Verifica si hay un usuario autenticado antes de compartir la variable
        if (Auth::check()) {
            // Comparte la variable $user con todas las vistas
            $user=Auth::user();
            View::share('user');
        } else {
            // Si no hay usuario autenticado, comparte null
            View::share('user', null);
        }
    }

    public function profile()
    {
        // Obtenemos el usuario autenticado
        $user = Auth::user();
        
        // Concatenamos los campos de apellido
        $lastname = $user->lastname_1 . ' ' . $user->lastname_2;
        $lastname1 = $user ->lastname_1;

        // Calculamos el porcentaje de completitud
        $porcentajeCompletado = $this->calcularPorcentajeCompletado($user);
        
        // Pasamos los datos a la vista
        return view('profile', ['user' => $user, 'lastname' => $lastname,'lastname1' => $lastname1, 'porcentajeCompletado' => $porcentajeCompletado]);
    }

    private function calcularPorcentajeCompletado($user)
    {
        $camposRequeridos = [
            'name', 
            'lastname_1', 
            'lastname_2', 
            'email', 
            'password', 
            'birthday', 
            'gender', 
            'category',
            'email_verified_at',
            'created_at',
            'updated_at'
        ];
    
        $camposCompletados = 0;
    
        foreach ($camposRequeridos as $campo) {
            // Verifica si el campo no está vacío y no es null
            if (!empty($user->$campo) || $user->$campo !== null) {
                $camposCompletados++;
            }
        }
    
        // Calcula el porcentaje de campos completados
        $porcentaje = ($camposCompletados / count($camposRequeridos)) * 100;
    
        // Tomar los dos primeros caracteres antes del punto
        $porcentajeFormateado = substr($porcentaje, 0, 2);
    
        return $porcentajeFormateado;
    }
}

