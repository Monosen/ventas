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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_persona');
            $table->unsignedBigInteger('tipo_persona');
            $table->string('nombre', 100);
            $table->string('tipo_documento', 20);
            $table->string('num_documento', 15);
            $table->string('direccion', 70);
            $table->string('telefono', 15);
            $table->string('email', 50);
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
