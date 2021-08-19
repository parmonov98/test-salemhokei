<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('albums')->delete();
        
        \DB::table('albums')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_ru' => 'Альбом 1',
                'name_kk' => NULL,
                'name_en' => NULL,
                'meta_title_ru' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_en' => NULL,
                'meta_description_ru' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_en' => NULL,
                'open_graph_title_ru' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_en' => NULL,
                'avatar' => '/images/1591596329.png',
                'alias' => '1-albom-1',
                'type' => 3,
                'published_at' => '2020-04-04 10:05:00',
                'is_published' => 1,
                'created_at' => '2020-03-30 16:52:18',
                'updated_at' => '2020-06-08 11:05:33',
            ),
        ));
        
        
    }
}