<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlbumImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('album_images')->delete();
        
        \DB::table('album_images')->insert(array (
            0 => 
            array (
                'id' => 4,
                'album_id' => 1,
                'avatar' => '/img/gallery/1591596418.png',
                'is_published' => 0,
                'created_at' => '2020-06-08 11:06:58',
                'updated_at' => '2020-06-08 11:06:58',
            ),
        ));
        
        
    }
}