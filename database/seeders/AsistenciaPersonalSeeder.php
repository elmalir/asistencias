<?php

namespace Database\Seeders;

use App\Models\AsistenciaPersonal;
use Illuminate\Database\Seeder;

class AsistenciaPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AsistenciaPersonal::factory()->times(100)->create([]);
    }
}
