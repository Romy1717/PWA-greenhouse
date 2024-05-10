<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    use HasFactory;

    protected $table = 'businesssubcategories'; // Especificamos el nombre de la tabla

    protected $fillable = [
        'name', // Corregido el nombre del campo a 'name'
        'description', // Corregido el nombre del campo a 'descripcion'
    ];

    /* Relación uno a muchos con BusinessSubcategory
    public function subcategorias()
    {
        return $this->hasMany(Businesssubcategory::class, 'categoria_id', 'id');
    }*/
}
