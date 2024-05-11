<?php

namespace App\Http\Controllers;

use App\Models\SubcategoriesBusiness;
use App\Models\BusinessCategory;
use Illuminate\Http\Request;

class SubcategoriesBusinessController extends Controller
{
    public function index()
    {
        // Obtener todas las subcategorías de negocio de la base de datos paginadas
        $subcategoriesbusiness = SubcategoriesBusiness::paginate(10);
        
        // Obtener todas las categorías de negocio para pasarlas a la vista
        $businesscategories = BusinessCategory::all();
        
        // Enviar los datos a la vista 'subcategoriesbusiness.index'
        return view('subcategoriesbusiness', compact('subcategoriesbusiness', 'businesscategories'));
    }
    
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'business_category_id' => 'required|exists:businesscategories,id', // Corregido 'businesscategories' por 'business_categories'
        ]);
    
        // Crear una nueva subcategoría de negocio en la base de datos
        SubcategoriesBusiness::create($request->all());

        return redirect()->route('subcategoriesbusiness.index')->with('success', 'Subcategoría de negocio creada exitosamente');
    }
    
    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'business_category_id' => 'required|exists:businesscategories,id', // Corregido 'businesscategories' por 'business_categories'
        ]);
    
        // Buscar la subcategoría de negocio a actualizar
        $subcategoriesbusiness = SubcategoriesBusiness::findOrFail($id);
    
        // Actualizar la subcategoría de negocio
        $subcategoriesbusiness->update($request->all());
    
        // Redirigir de vuelta a la página de subcategorías de negocio con un mensaje de éxito
        return redirect()->route('subcategoriesbusiness.index')->with('success', 'Subcategoría de negocio actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Buscar la subcategoría de negocio a eliminar
        $subcategoriesbusiness = SubcategoriesBusiness::findOrFail($id);
    
        // Eliminar la subcategoría de negocio
        $subcategoriesbusiness->delete();
    
        // Redirigir de vuelta a la página de subcategorías de negocio con un mensaje de éxito
        return redirect()->route('subcategoriesbusiness.index')->with('success', 'Subcategoría de negocio eliminada exitosamente');
    }
}
