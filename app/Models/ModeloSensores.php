<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $fillable = ['sensor_id', 'name', 'description'];

    public function sensor()
    {
        return $this->belongsTo(Sensor::class);
    }
}
