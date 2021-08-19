<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_ru' => 'Первая запись',
                'name_kk' => 'Биринши',
                'name_en' => 'First',
                'description_ru' => '<p>12345</p>',
                'description_kk' => '<p>1234567</p>',
                'description_en' => '<p>12345</p>',
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
                'alias' => '1-pervaya-zapis',
                'avatar' => '/images/1591595892.png',
                'type' => 1,
                'is_published' => 1,
                'published_at' => '2020-03-31 15:24:00',
                'created_at' => '2020-03-26 15:27:13',
                'updated_at' => '2020-08-18 20:46:57',
            ),
        ));
        
        
    }
}