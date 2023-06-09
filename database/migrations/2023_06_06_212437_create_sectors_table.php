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
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();

            $table->string('codSector');
            $table->string('Nombre');
            $table->string('cod1');
            $table->string('cod2');
            $table->string('cod3');
            $table->string('cod4');
            $table->string('cod5');
            $table->string('cod6');
            $table->string('cod7');
            $table->string('cod8');
            $table->string('cod9');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
};
