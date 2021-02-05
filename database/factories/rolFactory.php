<?php

namespace Database\Factories;

use App\Models\rol;
use Illuminate\Database\Eloquent\Factories\Factory;

class rolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
