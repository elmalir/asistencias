<?php

namespace Database\Factories;

use App\Models\AsistenciaPersonal;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsistenciaPersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AsistenciaPersonal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $personas = Persona::select('id')->get();
        return [
            //'persona_id' => rand(1, 99),
            'persona_id' => $this->faker->randomElement($personas)->id,
            'fecha_ingreso' => $this->faker->dateTime(),
            'fecha_salida' =>  $this->faker->dateTime()
        ];
    }
}
