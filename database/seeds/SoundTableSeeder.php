<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sounds')->insert([
            'id'=>'1',
            'soundName' =>'Nightcall',
            'music'  =>'/audio/Kavinsky-Nightcall.mp3'
        ]);
        DB::table('sounds')->insert([
            'id'=>'2',
            'soundName' =>'Hurt',
            'music'  =>'/audio/Johnny Cash - Hurt.mp3'
        ]);
        DB::table('sounds')->insert([
            'id'=>'3',
            'soundName' =>'Way down we go',
            'music'  =>'/audio/hity-2018-kaleo-way-dawn-we-go(mp3-top.info).mp3'
        ]);
    }
}
