<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BulanTableSeeder::class,
            StatusTableSeeder::class,
            AdminTableSeeder::class,
            KelasTableSeeder::class,
            LevelTableSeeder::class,
            SppTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
