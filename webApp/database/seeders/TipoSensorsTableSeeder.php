<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos de prueba en la tabla 'tipo_sensors'
        DB::table('tipo_sensors')->insert([
            [
                'config' => 'Cloro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'config' => 'Presion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'config' => 'Caudal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'config' => 'PH',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'config' => 'Disable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);
    }
}
