<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function categoria()
    {
        return $this->belongsTo(Categories::class);
    }
}
