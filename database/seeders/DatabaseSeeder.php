<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //\App\Models\Producto::factory(70)->create();
        $this->call(ClienteSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(ProveedorSeeder::class);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
