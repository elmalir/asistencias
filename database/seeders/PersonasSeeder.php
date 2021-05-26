<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;


class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Maneras de crear objeto personas
        //1)
        $persona = new Persona();
        $persona->nombres = 'Danilo';
        $persona->apellidos = 'Nuela';
        $persona->cedula = '1804323232';
        $persona->edad = 34;
        $persona->email = 'danilo@gmail.com';
        $persona->save();
        //2) Aleatorio
        Persona::factory()->times(100)->create([]);

        //Aleatorio con atributo
        Persona::factory()->times(10)->create([
            'edad' => 18
        ]);
    }
}
