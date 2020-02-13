<?php

use Illuminate\Database\Seeder;
use App\Kelas;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'kelas' => 'XII RPL 1',
            'wali_kelas' => 'Zainal Abidin',
            'tahun_ajaran' => '2019/2020'
        ]);

        Kelas::create([
            'kelas' => 'XI RPL 5',
            'wali_kelas' => 'Siana Norma Heni',
            'tahun_ajaran' => '2018/2019'
        ]);

        Kelas::create([
            'kelas' => 'X RPL 4',
            'wali_kelas' => 'Emil Baktiar Zulkarnaen',
            'tahun_ajaran' => '2017/2018'
        ]);
    }
}
