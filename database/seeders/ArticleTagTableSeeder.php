<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_tag')->delete();
        
        \DB::table('article_tag')->insert(array (
            0 => 
            array (
                'id' => 25,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 26,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 27,
                'article_id' => 3,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 28,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 41,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 42,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 43,
                'article_id' => NULL,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 44,
                'article_id' => NULL,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 45,
                'article_id' => NULL,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 46,
                'article_id' => NULL,
                'tag_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 47,
                'article_id' => NULL,
                'tag_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 48,
                'article_id' => NULL,
                'tag_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 49,
                'article_id' => NULL,
                'tag_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 50,
                'article_id' => NULL,
                'tag_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 51,
                'article_id' => NULL,
                'tag_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 52,
                'article_id' => 38,
                'tag_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 25,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 26,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 27,
                'article_id' => 3,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 28,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 41,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 42,
                'article_id' => NULL,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 43,
                'article_id' => NULL,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 44,
                'article_id' => NULL,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 45,
                'article_id' => NULL,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 46,
                'article_id' => NULL,
                'tag_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 47,
                'article_id' => NULL,
                'tag_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 48,
                'article_id' => NULL,
                'tag_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 49,
                'article_id' => NULL,
                'tag_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 50,
                'article_id' => NULL,
                'tag_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 51,
                'article_id' => NULL,
                'tag_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 52,
                'article_id' => 38,
                'tag_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}