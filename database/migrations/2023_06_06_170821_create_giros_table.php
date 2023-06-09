<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giros', function (Blueprint $table) {
            $table->id();
            
            $table->string('codGiro');
            $table->string('Nombre');
            $table->string('cod1');
            $table->string('cod2');
            $table->string('cod3');
            $table->string('cod4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giros');
    }
};
