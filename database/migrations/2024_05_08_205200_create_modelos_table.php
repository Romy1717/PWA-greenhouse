<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sensor_id')->constrained('sensores');
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('maker')->nullable();
            $table->text('description')->nullable();
            $table->string('measurement_units')->nullable();
            $table->timestamps();
        });
        
        
    }

    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
