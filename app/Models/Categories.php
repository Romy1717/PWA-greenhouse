<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    // Definir la relación con las subcategorías
    public function subcategories()
    {
        return $this->hasMany(Subcategories::class, 'category_id'); 
    }
}