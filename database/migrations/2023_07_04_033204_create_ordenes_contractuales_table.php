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
        Schema::create('orden_contractuals', function (Blueprint $table) {
            $table->integer('id')->default(1);
            $table->id('Numero_orden');
            $table->string('NIT', 80);
            $table->string('Nombre_proveedor', 80);
            $table->date('Fecha_orden');
            $table->float('Monto_total', 25);
            $table->date('Fecha_entrega_orden');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes_contractuales');
    }
};