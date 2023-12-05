<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    protected $model = Alumno::class;

    /*
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'nombre_ape'=> $this->faker->firstName(). ' '. $this->faker->lastName(),
            'edad'=> $this->faker->numberBetween(1, 99),
            'telefono'=> $this->faker->phoneNumber(),
            'direccion'=> $this->faker->streetAddress(),
        ];
    }
}
