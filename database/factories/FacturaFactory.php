<?php

namespace Database\Factories;

use App\Models\SalidaAlmacen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Num_salida' => SalidaAlmacen::all()->random()->Num_salida,
            'Numero_factura' => $this->faker->numberBetween($min = 1, $max = 9999),
            'Proveedor' => $this->faker->name(),
            'Total_bienes' => $this->faker->numberBetween($min = 1, $max = 99999),
            'Valor_total' => $this->faker->randomFloat($min = 0.00, $max = 99999.99),
            'Fecha_factura' => $this->faker->date()
        ];
    }
}