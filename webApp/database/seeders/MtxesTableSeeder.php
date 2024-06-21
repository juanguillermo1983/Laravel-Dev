<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MtxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos de prueba en la tabla 'mtxes'
        DB::table('mtxes')->insert([
            [
                'id_cdp' => 1,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 1,
                'sensor_a' => 2,
                'sensor_b' => 3,
                'sensor_c' => 4,
                'sensor_d' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 1,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 1,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 1,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],            
            [
                'id_cdp' => 2,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 2,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 2,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 2,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 2,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],            [
                'id_cdp' => 2,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 2,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],            
            [
                'id_cdp' => 3,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 3,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 3,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cdp' => 3,
                'sensor_a' => 1,
                'sensor_b' => 2,
                'sensor_c' => 3,
                'sensor_d' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);
    }
}
