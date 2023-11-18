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
        DB::unprepared('DROP PROCEDURE IF EXISTS prodInventario');
        DB::unprepared(
            'CREATE PROCEDURE prodInventario(
                IN `prod` INT,
                IN `fechainicio` DATE,
                IN `fechafin` DATE
            )
            BEGIN
            SELECT
            movimientos.created_at AS fecha,
            movimientos.numeroDoc as doc,
            movimientos.estado as tipo,
            movimiento_producto.cantidad AS cantidad,
            movimiento_producto.preciocompra AS preciocompra,
            movimiento_producto.precioventa AS precioventa
            FROM movimientos
            INNER JOIN movimiento_producto on (movimientos.id=movimiento_producto.movimiento_id)
            WHERE (DATE(movimientos.created_at)>=fechainicio AND
            DATE(movimientos.created_at)<=fechafin AND prod = movimiento_producto.producto_id)
            and( movimientos.estado= "COMPRA" or movimientos.estado = "PEDIDO")
            ORDER by fecha asc;
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
        Schema::dropIfExists('spinventarios');
    }
};
