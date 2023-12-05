<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    protected $model = Curso::class;

    /*
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->firstName(),
            'nivel'=> $this->faker->randomElement(['Básico', 'Medio', 'Avanzado']),
            'horasAcademicas'=> $this->faker->numberBetween(),
            'profesor_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
