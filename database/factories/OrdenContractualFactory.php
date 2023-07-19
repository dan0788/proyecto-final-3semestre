<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrdenContractual>
 */
class OrdenContractualFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NIT' => $this->faker->text(80),
            'Nombre_proveedor' => $this->faker->name(),
            'Fecha_orden' => $this->faker->date(),
            'Monto_total' => $this->faker->randomFloat($min = 0.00, $max = 999999.99),
            'Fecha_entrega_orden' => $this->faker->date()
        ];
    }
}