<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías de la base de datos paginadas
        $categories = Categories::paginate(10); // Cambia 10 por el número de resultados por página que desees
        
        // Enviar los datos a la vista 'categories.index'
        return view('categories', compact('categories'));
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
        return redirect()->route('categories.index')->with('status', 'Categoría creada correctamente');
    }

    public function edit($id)
    {
        // Encuentra la categoría por su ID
        $category = Categories::findOrFail($id);
        
        // Muestra el formulario de edición con la categoría a modificar
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Encuentra la categoría por su ID
        $category = Categories::findOrFail($id);
        
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
    
        // Actualiza los campos de la categoría
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        // Redirige a la página de categorías con un mensaje de éxito
        return redirect()->route('categories.index')->with('status', 'Categoría modificada correctamente');
    }

    public function destroy($id)
    {
        // Encuentra la categoría por su ID
        $category = Categories::findOrFail($id);
        
        // Elimina la categoría
        $category->delete();
        
        // Redirige a la página de categorías con un mensaje de éxito
        return redirect()->route('categories.index')->with('status', 'Categoría eliminada correctamente');
    }
}
