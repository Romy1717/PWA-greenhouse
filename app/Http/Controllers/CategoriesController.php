<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Category; // Corregido el nombre del modelo a Category

class CategoriesController extends Controller
{
    public function categories()
    {
        // Lógica para la página "Contacto"
        return view('categories');
    }
    public function index()
    {
        // Aquí recuperamos y mostramos la lista de categorías
        $categories = Categories::all(); // Cambiado de Categories a Category
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        // Este método muestra el formulario para crear una nueva categoría
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        // Crear una nueva categoría en la base de datos
        Categories::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

       
        // Redirigir de vuelta a la página de categorías con un mensaje de éxito
        return redirect()->route('categories');
    }

    // Otros métodos del controlador, como show(), edit(), update(), destroy(), etc.
}