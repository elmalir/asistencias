<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use Illuminate\Database\Seeder;

class HabilidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habilidad::factory()->times(100)->create([]);
        $habilidad = new Habilidad();
        $habilidad->persona_id = 1;
        $habilidad->nombre = 'nom';
        $habilidad->porcentaje = 10;
        $habilidad->orden = 1;
        $habilidad->save();
    }
}
