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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id('id_solicitud');
            $table->unsignedBigInteger('id');
            $table->foreign('id')
                ->references('id')
                ->on('responsables')
                ->onUpdate('cascade');
            $table->string('Responsable_soli', 80);
            $table->string('Centro_costos', 80);
            $table->float('Rubro_presupuestal', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};