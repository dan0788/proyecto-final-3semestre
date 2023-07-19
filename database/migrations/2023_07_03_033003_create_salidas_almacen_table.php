<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salidas_almacen', function (Blueprint $table) {
            $table->id('Num_salida');
            $table->string('Empleado', 80);
            $table->date('Fecha_salida');
            $table->date('Fecha_entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salidas_almacen');
    }
};