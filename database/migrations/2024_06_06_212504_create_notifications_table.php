<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
        
            $table->id();
            $table->integer('temperature')->nullable(); 
            $table->integer('humidity')->nullable();  
            $table->integer('setT')->nullable(); 
            $table->integer('setH')->nullable(); 
            $table->string('alert')->nullable(); 
            $table->string('state')->nullable(); 
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
        Schema::dropIfExists('notifications');
    }
}
