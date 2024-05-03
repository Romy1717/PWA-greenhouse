<?php

namespace App\Http\Controllers;

use App\Models\Subcategories;
use App\Models\Categories;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function index()
    {
        // Obtener todas las subcategorías de la base de datos paginadas
        $subcategories = Subcategories::paginate(10); // Cambia 10 por el número de resultados por página que desees
     
        // Obtener todas las categorías para pasarlas a la vista
        $categories = Categories::all();
       
        // Enviar los datos a la vista 'subcategories.index'
        return view('subcategories', compact('subcategories', 'categories'));
    }
    
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id', // Validar que la categoría exista en la base de datos
        ]);
    
        // Crear una nueva subcategoría en la base de datos
        Subcategories::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id, // Asignar el ID de la categoría seleccionada
        ]);

        return redirect()->route('subcategories.index')->with('success', 'Subcategoría creada exitosamente');
    }
    


    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id', // Validar que la categoría exista en la base de datos
        ]);
    
        // Buscar la subcategoría a actualizar
        $subcategory = Subcategories::findOrFail($id);
    
        // Actualizar la subcategoría
        $subcategory->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id, // Asignar el ID de la categoría seleccionada
        ]);
    
        // Redirigir de vuelta a la página de subcategorías con un mensaje de éxito
        return redirect()->route('subcategories.index')->with('success', 'Subcategoría actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Buscar la subcategoría a eliminar
        $subcategory = Subcategories::findOrFail($id);
    
        // Eliminar la subcategoría
        $subcategory->delete();
    
        // Redirigir de vuelta a la página de subcategorías con un mensaje de éxito
        return redirect()->route('subcategories.index')->with('success', 'Subcategoría eliminada exitosamente');
    }
}
