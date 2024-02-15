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
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->id('id_detalle_ingreso');
            $table->unsignedBigInteger('id_ingreso');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedInteger('cantidad');
            $table->unsignedDecimal('precio_compra');
            $table->unsignedDecimal('precio_venta');
            $table->timestamps();

            // Definición de la clave foránea
            $table->foreign('id_ingreso')->references('id_ingreso')->on('ingresos');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ingresos');
    }
};
