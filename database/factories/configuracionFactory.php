<?php

namespace Database\Factories;

use App\Models\configuracion;
use Illuminate\Database\Eloquent\Factories\Factory;

class configuracionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = configuracion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idioma'=>$this->faker->name,
            'pais'=>$this->faker->country,
            'estado'=>$this->faker->state,
        ];
    }
}
