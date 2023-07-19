<?php

namespace Database\Factories;

use App\Models\Responsable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Responsable::all()->random()->id,
            'Responsable_soli' => $this->faker->name(),
            'Centro_costos' => $this->faker->realText(20),
            'Rubro_presupuestal' => $this->faker->randomFloat($min = 0.00, $max = 99999.99)
        ];
    }
}