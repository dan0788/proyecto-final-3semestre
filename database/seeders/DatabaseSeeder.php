<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ResponsableSeeder::class);
        $this->call(SalidaAlmacenSeeder::class);
        $this->call(OrdenContractualSeeder::class);
        $this->call(BienSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(FacturaSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
