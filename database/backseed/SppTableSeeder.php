<?php

use Illuminate\Database\Seeder;
use App\Spp;

class SppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spp::create([
            'nama' => 'SPP Bulanan',
            'nominal' => 400000,
        ]);
    }
}
