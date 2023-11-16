<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categoria::create([
            'codigo'=> '100',
            'nombre'=> 'PINTURAS Y COMPLEMENTOS',
        ]);
        Categoria::create([
            'codigo'=> '110',
            'nombre'=> 'ELECTROPORTATILES Y ACCESORIOS',
        ]);

        Categoria::create([
            'codigo'=> '120',
            'nombre'=> 'SELLANTES-FIJACION Y TORNILLERIA',
        ]);
        Categoria::create([
            'codigo'=> '130',
            'nombre'=> 'BAÑO Y FONTANERIA',
        ]);
        Categoria::create([
            'codigo'=> '200',
            'nombre'=> 'MATERIAL ELECTRICO',
        ]);
        Categoria::create([
            'codigo'=> '210',
            'nombre'=> 'HERRAMIENTAS',
        ]);
        Categoria::create([
            'codigo'=> '250',
            'nombre'=> 'CERRAJERIA',
        ]);
    }
}
