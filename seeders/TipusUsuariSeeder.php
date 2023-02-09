<?php

namespace Database\Seeders;

use App\Models\TipusUsuari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipusUsuariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipusUsuari::factory(1)->create();
    }
}
