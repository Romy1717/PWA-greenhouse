<?php

namespace App\Http\Controllers;

use App\Models\Subcategories;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function index()
    {
        // Obtener todas las subcategorías de la base de datos paginadas
        $subcategories = Subcategories::paginate(10); // Cambia 10 por el número de resultados por página que desees
     
        // Enviar los datos a la vista 'subcategories.index'
        return view('subcategories', compact('subcategories'));
    }
    
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
    
        // Crear una nueva subcategoría en la base de datos
        Subcategories::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        // Redirigir de vuelta a la página de subcategorías con un mensaje de éxito
        return redirect()->route('subcategories.index')->with('success', 'Subcategoría creada exitosamente');
    }

    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
    
        // Buscar la subcategoría a actualizar
        $subcategories = Subcategories::findOrFail($id);
    
        // Actualizar la subcategoría
        $subcategories->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        // Redirigir de vuelta a la página de subcategorías con un mensaje de éxito
        return redirect()->route('subcategories.index')->with('success', 'Subcategoría actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Buscar la subcategoría a eliminar
        $subcategories = Subcategories::findOrFail($id);
    
        // Eliminar la subcategoría
        $subcategories->delete();
    
        // Redirigir de vuelta a la página de subcategorías con un mensaje de éxito
        return redirect()->route('subcategories.index')->with('success', 'Subcategoría eliminada exitosamente');
    }
}
