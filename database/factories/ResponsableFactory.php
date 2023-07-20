<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsable>
 */
class ResponsableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Fecha' => $this->faker->date(),
            'Nombre' => $this->faker->name(),
            'Nombre_responsable' => $this->faker->name(),
            'Cedula' => $this->faker->randomNumber() /* como alternativa se coloca randomNumber 
            para crear un id */
        ];
    }
}