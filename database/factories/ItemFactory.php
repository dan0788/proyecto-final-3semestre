<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\OrdenContractual;
use App\Models\Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_solicitud' => Solicitud::all()->random()->id_solicitud,
            'Numero_entrada' => Factura::all()->random()->Numero_entrada,
            'Numero_orden' => OrdenContractual::all()->random()->Numero_orden,
            'Nombre_bien' => $this->faker->realText(40),
            'Cantidad' => $this->faker->numberBetween($min = 1, $max = 99999),
            'Valor_uni' => $this->faker->randomFloat($min = 0.00, $max = 99999.99),
            'Unidad_medida' => $this->faker->numberBetween($min = 1, $max = 25),
            'Valor_total_items' => $this->faker->randomFloat($min = 0.00, $max = 99999.99)
        ];
    }
}