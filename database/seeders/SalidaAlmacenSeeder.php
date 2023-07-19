<?php

namespace Database\Seeders;

use App\Models\SalidaAlmacen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalidaAlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalidaAlmacen::factory(30)->create();
    }
}
