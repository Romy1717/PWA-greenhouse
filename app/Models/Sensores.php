<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensores extends Model
{
    protected $fillable = ['type', 'description'];

    public function modelos()
    {
        return $this->hasMany(Modelos::class);
    }
}
