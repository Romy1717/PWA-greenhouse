<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    protected $fillable = ['name', 'description', 'category_id']; // Agrega los campos description y category_id

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
