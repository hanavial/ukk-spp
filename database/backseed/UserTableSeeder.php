<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'user',
            'name' => 'Raihan Ahnaf',
            'email' => 'raihan@gmail.com',
            'password' => Hash::make('user'),
            'tahun_masuk' => '2017',
            'id_level' => 3,
            'id_kelas' => 3
        ]);
    }
}
