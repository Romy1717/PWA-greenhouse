<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoriesBusiness extends Model
{
    use HasFactory;

    protected $table = 'subcategoriesbusiness';

    protected $fillable = ['name', 'description', 'business_category_id'];

    /**
     * Get the business category that owns the subcategory.
     */
    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class, 'business_category_id');
    }
}
