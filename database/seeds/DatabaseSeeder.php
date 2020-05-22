<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class,
                     RolesTableSeeder::class,
                     FilmsTableSeeder::class,
                     SoundTableSeeder::class,
                     Film_SoundSeeder::class]);
    }
}
