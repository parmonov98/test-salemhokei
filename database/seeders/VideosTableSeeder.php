<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_ru' => 'Видео 1',
                'name_kk' => NULL,
                'name_en' => NULL,
                'link_ru' => 'https://www.youtube.com/watch?v=cbe1x1Eh1Ds',
                'link_kk' => NULL,
                'link_en' => NULL,
                'type' => 2,
                'published_at' => '2020-05-05 16:17:14',
                'is_published' => 1,
                'created_at' => '2020-05-05 16:17:14',
                'updated_at' => '2020-05-04 17:26:47',
            ),
        ));
        
        
    }
}