<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS prodMin');
        DB::unprepared(
            'CREATE  PROCEDURE prodMin()
            BEGIN
            SELECT
            productos.id,
            productos.descripcion,
            productos.entrada,
            productos.salida,
            productos.stockinicial,
            productos.cant_min,
            (productos.stockinicial+productos.entrada-productos.salida) AS "stock",
            productos.precioventa,
            categorias.nombre
            FROM productos
            INNER JOIN categorias ON (productos.categoria_id=categorias.id)
            WHERE (productos.stockinicial+productos.entrada-productos.salida)<productos.cant_min;



            END
            '
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productosminimos');
    }
};
