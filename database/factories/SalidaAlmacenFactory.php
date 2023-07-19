<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalidaAlmacen>
 */
class SalidaAlmacenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Empleado' => $this->faker->name(),
            'Fecha_salida' => $this->faker->date(),
            'Fecha_entrega' => $this->faker->date()
        ];
    }
}