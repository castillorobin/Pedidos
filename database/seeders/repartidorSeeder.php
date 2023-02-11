<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class repartidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Repartidor::factory()->count(50)->create(); 
    }
}
