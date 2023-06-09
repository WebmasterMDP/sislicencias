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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('periodo');
            $table->string('vigencia');
            $table->string('natJurid');
            $table->string('expediente');
            $table->string('asunto');
            $table->string('fechaExped');
            $table->string('apeNombre');
            $table->string('resolucion');
            $table->string('ruc');
            $table->string('telefono');
            $table->string('dni');
            $table->string('repLegal');
            $table->string('dniRepLegal');
            $table->string('dirEstable');
            $table->string('nomComercial');
            $table->string('numero');
            $table->string('int');
            $table->string('manzana');
            $table->string('lote');
            $table->string('cSect');
            $table->string('sector');
            $table->string('zona');
            $table->string('area');
            $table->string('giroEstable');
            $table->string('nivelRiesgo');
            $table->string('zonificacion');
            $table->string('estable');
            $table->string('observacion');
            $table->string('reciboPago');
            $table->string('fechaPago');
            $table->string('importe');
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
        Schema::dropIfExists('registro');
    }
};
