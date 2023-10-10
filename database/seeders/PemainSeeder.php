<?php

namespace Database\Seeders;

use App\Models\pemain;
use Database\Factories\PemainFactory;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pemain::factory()
        ->count(10)
        ->create();
    }
}
