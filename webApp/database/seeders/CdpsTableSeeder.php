<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Agregar esta línea

class CdpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos de prueba en la tabla 'cdps'
        DB::table('cdps')->insert([
            [
                'nombre' => 'Cdp1',
                'ubicacion' => 'Ubicación 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cdp2',
                'ubicacion' => 'Ubicación 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cdp3',
                'ubicacion' => 'Ubicación 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);
    }
}
