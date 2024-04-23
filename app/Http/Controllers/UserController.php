<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        // Obtenemos el usuario autenticado
        $user = Auth::user();
        
        // Concatenamos los campos de apellido
        $lastname = $user->lastname_1 . ' ' . $user->lastname_2;
        
        // Calculamos el porcentaje de completitud
        $porcentajeCompletado = $this->calcularPorcentajeCompletado($user);
        
        // Pasamos los datos a la vista
        return view('profile', ['user' => $user, 'lastname' => $lastname, 'porcentajeCompletado' => $porcentajeCompletado]);
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
            'category'
        ];

        $camposCompletados = 0;

        foreach ($camposRequeridos as $campo) {
            if (!empty($user->$campo)) {
                $camposCompletados++;
            }
        }

        $porcentaje = ($camposCompletados / count($camposRequeridos)) * 100;

        return $porcentaje;
    }
}
