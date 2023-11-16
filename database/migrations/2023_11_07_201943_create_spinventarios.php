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

            (SELECT
            ventas.created_at AS fecha,
            ventas.numeroDoc as doc,
            producto_venta.cantidad AS cantidad,
            producto_venta.precioventa  AS precio,
            "venta" AS tipo
            FROM ventas
            INNER JOIN producto_venta on(ventas.id=producto_venta.venta_id)
            WHERE (DATE(ventas.created_at)>=fechainicio) AND
            (DATE(ventas.created_at)<=fechafin) AND prod = producto_venta.producto_id
            UNION
            SELECT
            compras.created_at AS fecha,
            compras.numeroDoc as doc,
            compra_producto.cantidad AS cantidad,
            compra_producto.preciocompra  AS precio,
            "compra" as tipo
            FROM compras
            INNER JOIN compra_producto on(compras.id=compra_producto.compra_id)
            WHERE (DATE(compras.created_at)>=fechainicio) AND
            (DATE(compras.created_at)<=fechafin) AND prod = compra_producto.producto_id)
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
