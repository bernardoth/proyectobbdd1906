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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            //$table->string('numeroDoc', 50)->nullable;
            //$table->enum('estado',['Pendiente','Pagado','Cancelado'])->default('Pendiente');
            $table->string('nombres',50);
            $table->string('apellidos',50)->nullable();
            $table->string('correo',30)->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('celular', 15)->nullable();
            $table->string('cinit', 20);
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
        Schema::dropIfExists('proveedors');
    }
};
