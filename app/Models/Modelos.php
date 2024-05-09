<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    protected $fillable = ['sensor_id','brand','model','maker', 'description', 'measurement_units'];

    public function sensor()
    {
        return $this->belongsTo(Sensores::class, 'sensor_id');
    }
}
