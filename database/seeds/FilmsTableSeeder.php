<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'id'=>'1',
            'filmName'=>'Inception',
            'genre'=>'Fantasy',
            'img'=>'https://media.kg-portal.ru/movies/i/inception/posters/inception_22.jpg',
            'trailer'=>'/video/inception.mp4',
        ]);
        DB::table('films')->insert([
            'id'=>'2',
            'filmName'=>'Logan',
            'genre'=>'Fantasy',
            'img'=>'https://lamafilm.club/wp-content/uploads/2016/10/logan-2017.jpg',
            'trailer'=>'/video/Logan   Way Down We Go   Music Video.mp4',
        ]);
        DB::table('films')->insert([
            'id'=>'3',
            'filmName'=>'Drive',
            'genre'=>'Criminal',
            'img'=>'https://2ch.hk/b/src/218843039/15879853459892.jpg',
            'trailer'=>'/video/Drive - Movie Trailer (2011) HD.mp4',
        ]);
        DB::table('films')->insert([
            'id'=>'4',
            'filmName'=>'Snatch',
            'genre'=>'Criminal',
            'img'=>'https://upload.wikimedia.org/wikipedia/ru/b/b1/Snatch_Movie_Poster.jpg',
            'trailer'=>'/video/I\'ll Fight Ya For It - Snatch (2 8) Movie CLIP (2000) HD.mp4',
        ]);
        DB::table('films')->insert([
            'id'=>'5',
            'filmName'=>'La-la-land',
            'genre'=>'Musical',
            'img'=>'https://eng8.ru/wp-content/uploads/2018/06/5.jpg',
            'trailer'=>'/video/La La Land - \'City of stars\' scene.mp4',
        ]);
        DB::table('films')->insert([
            'id'=>'6',
            'filmName'=>'Legend',
            'genre'=>'Criminal',
            'img'=>'https://www.film.ru/sites/default/files/movies/posters/legend_xlg.jpg',
            'trailer'=>'/video/Legend_Official_Trailer_.mp4',
        ]);
        DB::table('films')->insert([
            'id'=>'7',
            'filmName'=>'I am legend',
            'genre'=>'sci-fi',
            'img'=>'https://upload.wikimedia.org/wikipedia/ru/thumb/d/d6/%D0%9F%D0%BE%D1%81%D1%82%D0%B5%D1%80_%D1%84%D0%B8%D0%BB%D1%8C%D0%BC%D0%B0_%D0%AF-%D0%BB%D0%B5%D0%B3%D0%B5%D0%BD%D0%B4%D0%B0.jpg/230px-%D0%9F%D0%BE%D1%81%D1%82%D0%B5%D1%80_%D1%84%D0%B8%D0%BB%D1%8C%D0%BC%D0%B0_%D0%AF-%D0%BB%D0%B5%D0%B3%D0%B5%D0%BD%D0%B4%D0%B0.jpg',
            'trailer'=>'/video/I_Am_Legend_(1_10)_Movie_CLIP_-_Hunting_in_the_City_(2007)_HD.mp4',

        ]);
        DB::table('films')->insert([
            'id'=>'8',
            'filmName'=>'The dark knight',
            'genre'=>'Criminal',
            'img'=>'https://img.huffingtonpost.com/asset/5cf821df2500002e0adbf887.jpeg?ops=scalefit_630_noupscale',
            'trailer'=>'/video/The_Dark_Knight_(2008)_Official_Trailer_.mp4',
        ]);
        DB::table('films')->insert([
            'id'=>'9',
            'filmName'=>'Fight club',
            'genre'=>'Drama',
            'img'=>'https://vignette.wikia.nocookie.net/warrior/images/c/c9/%D0%91%D0%BE%D0%B9%D1%86%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BA%D0%BB%D1%83%D0%B1-2.jpg/revision/latest/top-crop/width/360/height/450?cb=20160205195138&path-prefix=ru',
            'trailer'=>'/video/Fight Club (1 5) Movie CLIP - I Want You to Hit Me (1999) HD.mp4',
        ]);

    }
}
