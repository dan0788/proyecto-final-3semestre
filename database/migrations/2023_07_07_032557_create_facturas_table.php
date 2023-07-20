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
        Schema::create('facturas', function (Blueprint $table) {
            $table->integer('id')->default(1);
            $table->id('Numero_entrada');
            $table->unsignedBigInteger('Num_salida');
            $table->foreign('Num_salida')
                ->references('Num_salida')
                ->on('salida_almacens')
                ->onUpdate('cascade');
            $table->integer('Numero_factura');
            $table->string('Proveedor', 80);
            $table->integer('Total_bienes');
            $table->float('Valor_total',25);
            $table->date('Fecha_factura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};