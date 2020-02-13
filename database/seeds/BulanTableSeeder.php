<?php

use Illuminate\Database\Seeder;
use App\Bulan;

class BulanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bulan::create([
            'nama' => 'Januari'
        ]);
    }
}
