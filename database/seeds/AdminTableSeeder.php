<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'admin',
            'name' => 'Hanavi Alvarel',
            'email' => 'hanavialvarel@gmail.com',
            'password' => Hash::make('admin')
        ]);
    }
}
