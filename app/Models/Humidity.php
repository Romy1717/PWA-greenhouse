<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humidity extends Model
{
    use HasFactory;

    protected $table = 'humidity'; // Indicar el nombre de la tabla

    protected $fillable = [
        'moist_quality',
    ];
}
