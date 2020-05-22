<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Film_SoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_sounds')->insert([
            'filmId'=>'2',
            'soundId'=>'2',
        ]);
        DB::table('film_sounds')->insert([
            'filmId'=>'2',
            'soundId'=>'3',
        ]);
        DB::table('film_sounds')->insert([
            'filmId'=>'3',
            'soundId'=>'1',
        ]);
    }
}
