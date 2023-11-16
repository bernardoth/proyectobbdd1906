<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Proveedor::create([
            'nombres' => 'Jenni Faviola',
            'apellidos'=>'Cespedes Cuevas',
            'correo'=>'saveucfanni@gmail.com',
            'direccion'=>'Av Roma',
            'celular'=>'77591752',
            'cinit'=>'77591752'
        ]);
        Proveedor::create([
            'nombres' => 'Lourdes',
            'apellidos'=>'Mamani Quispe',
            'correo'=>'lourdespretty@gmail.com',
            'direccion'=>'Av costas',
            'celular'=>'5265445',
            'cinit'=>'8865654'
        ]);
        Proveedor::create([
            'nombres' => 'Marie Eugenia',
            'apellidos'=>'Guarachi',
            'correo'=>'mauge1504@gmail.com',
            'direccion'=>'los pinos',
            'celular'=>'6254545',
            'cinit'=>'782545'
        ]);
    }
}
