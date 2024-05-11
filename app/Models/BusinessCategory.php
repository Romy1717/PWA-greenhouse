<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    use HasFactory;

    protected $table = 'businesscategories'; // Especificamos el nombre de la tabla

    protected $fillable = [
        'name', // Corregido el nombre del campo a 'name'
        'description', // Corregido el nombre del campo a 'descripcion'
    ];

    /**
     * Get the subcategories for the business category.
     */
    public function subcategories()
    {
        return $this->hasMany(SubcategoriesBusiness::class, 'business_category_id');
    }
}
