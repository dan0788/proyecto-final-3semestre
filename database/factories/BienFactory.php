<?php

namespace Database\Factories;

use App\Models\OrdenContractual;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Numero_orden' => OrdenContractual::all()->random()->Numero_orden
        ];
    }
}