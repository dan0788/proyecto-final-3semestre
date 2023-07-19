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
        Schema::create('items', function (Blueprint $table) {
            $table->id('id_item');
            $table->unsignedBigInteger('id_solicitud');
            $table->foreign('id_solicitud')
                ->references('id_solicitud')
                ->on('solicitudes')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('Numero_entrada');
            $table->foreign('Numero_entrada')
                ->references('Numero_entrada')
                ->on('facturas')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('Numero_orden');
            $table->foreign('Numero_orden')
                ->references('Numero_orden')
                ->on('ordenes_contractuales')
                ->onUpdate('cascade');
            $table->string('Nombre_bien', 80);
            $table->integer('Cantidad');
            $table->float('Valor_uni', 25);
            $table->integer('Unidad_medida');
            $table->float('Valor_total_items', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};