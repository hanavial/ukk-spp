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

        Bulan::create([
            'nama' => 'Februari'
        ]);

        Bulan::create([
            'nama' => 'Maret'
        ]);

        Bulan::create([
            'nama' => 'April'
        ]);

        Bulan::create([
            'nama' => 'Mei'
        ]);

        Bulan::create([
            'nama' => 'Juni'
        ]);

        Bulan::create([
            'nama' => 'juli'
        ]);

        Bulan::create([
            'nama' => 'Agustus'
        ]);

        Bulan::create([
            'nama' => 'September'
        ]);

        Bulan::create([
            'nama' => 'Oktober'
        ]);

        Bulan::create([
            'nama' => 'November'
        ]);

        Bulan::create([
            'nama' => 'Desember'
        ]);
    }
}
