<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemperatureHumidityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temperature_humidity', function (Blueprint $table) {
            $table->id();
            $table->integer('temperature'); 
            $table->integer('humidity'); 
            $table->integer('setT')->nullable(); 
            $table->integer('setH')->nullable(); 
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temperature_humidity');
    }
}
