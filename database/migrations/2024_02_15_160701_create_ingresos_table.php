<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('id_ingreso');
            $table->unsignedBigInteger('id_proveedor');
            $table->string('tipo_comprobante', 20);
            $table->string('num_comprobante', 10);
            $table->dateTime('fecha_hora');
            $table->unsignedDecimal('impuesto');
            $table->string('estado', 20);
            $table->timestamps();

            $table->foreign('id_proveedor')->references('id_persona')->on('personas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
