<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessCategory; 

class BusinessCategoryController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías de la base de datos paginadas
        $businesscategories = BusinessCategory::paginate(10);
        
        // Enviar los datos a la vista 'businessCategories.index'
        return view('businessCategories', compact('businesscategories')); // Corregido 'businessCategories' por 'businesscategories.index'
    }

    public function create()
    {
        // Este método muestra el formulario para crear una nueva categoría
        return view('businessCategories.create');
    }
    
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255', // Cambiado 'nombre' por 'name'
            'description' => 'nullable|string|max:255',
        ]);

        // Crear una nueva categoría en la base de datos
        BusinessCategory::create([
            'name' => $request->name,
            'description' => $request->description, // Cambiado 'descripcion' por 'description'
        ]);
       
        // Redirigir de vuelta a la página de categorías con un mensaje de éxito
        return redirect()->route('businesscategories.index')->with('status', 'Categoría creada correctamente'); // Cambiado 'businesscategories.index' por 'businesscategories.index'
    }

    public function edit($id)
    {
        // Encuentra la categoría por su ID
        $businessCategory = BusinessCategory::findOrFail($id);
        
        // Muestra el formulario de edición con la categoría a modificar
        return view('businessCategories.edit', compact('businessCategory'));
    }

    public function update(Request $request, $id)
    {
        // Encuentra la categoría por su ID
        $businessCategory = BusinessCategory::findOrFail($id);
        
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
    
        // Actualiza los campos de la categoría
        $businessCategory->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        // Redirige a la página de categorías con un mensaje de éxito
        return redirect()->route('businesscategories.index')->with('status', 'Categoría modificada correctamente'); // Cambiado 'businesscategories.index' por 'businesscategories.index'
    }

    public function destroy($id)
    {
        // Encuentra la categoría por su ID
        $businessCategory = BusinessCategory::findOrFail($id);
        
        // Elimina la categoría
        $businessCategory->delete();
        
        // Redirige a la página de categorías con un mensaje de éxito
        return redirect()->route('businesscategories.index')->with('status', 'Categoría eliminada correctamente'); // Cambiado 'businesscategories.index' por 'businesscategories.index'
    }
}
