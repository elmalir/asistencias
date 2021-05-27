<?php

namespace Database\Factories;

use App\Models\Habilidad;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabilidadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habilidad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $personas = Persona::select('id')->get();
        return [
            'persona_id' => $this->faker->randomElement($personas)->id,
            'nombre' => $this->faker->name,
            'porcentaje' => rand(0, 100),
            'orden' => rand(1, 9)
        ];
    }
}
