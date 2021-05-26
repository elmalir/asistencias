<?php

namespace Tests\Feature;

use App\Models\AsistenciaPersonal;
use App\Models\Persona;
use Database\Seeders\PersonasSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonasTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_seeder()
    {
        //$response = $this->get('/');
        //$response->assertStatus(200);
        //Ejecutar el seeder
        $this->seed(PersonasSeeder::class);
        //Contar el número de personas en la bdd
        $personas = Persona::count();
        $this->assertEquals($personas, 111);
    }

    public function test_asistencias_personas()
    {
        $persona = Persona::factory()->create([]);
        //Crear 2 asistencias
        $asistencia = AsistenciaPersonal::factory()->times(2)->create([
            'persona_id' =>$persona->id
        ]);
        $n_asistencia = $persona->asistencias->count();
        //Verificar
        $this->assertEquals($n_asistencia, 2);
    }
}
