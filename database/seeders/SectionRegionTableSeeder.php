<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionRegionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('section_region')->delete();
        
        \DB::table('section_region')->insert(array (
            0 => 
            array (
                'id' => 8,
                'section_id' => 8,
                'region_id' => 6,
                'created_at' => '2020-06-10 09:29:14',
                'updated_at' => '2020-06-10 09:29:14',
            ),
            1 => 
            array (
                'id' => 9,
                'section_id' => 1,
                'region_id' => 4,
                'created_at' => '2020-06-10 09:25:48',
                'updated_at' => '2020-06-10 09:25:48',
            ),
            2 => 
            array (
                'id' => 10,
                'section_id' => 2,
                'region_id' => 4,
                'created_at' => '2020-06-10 09:25:48',
                'updated_at' => '2020-06-10 09:25:48',
            ),
            3 => 
            array (
                'id' => 11,
                'section_id' => 3,
                'region_id' => 4,
                'created_at' => '2020-06-10 09:25:48',
                'updated_at' => '2020-06-10 09:25:48',
            ),
            4 => 
            array (
                'id' => 12,
                'section_id' => 4,
                'region_id' => 4,
                'created_at' => '2020-06-10 09:25:48',
                'updated_at' => '2020-06-10 09:25:48',
            ),
            5 => 
            array (
                'id' => 13,
                'section_id' => 5,
                'region_id' => 6,
                'created_at' => '2020-06-10 09:29:14',
                'updated_at' => '2020-06-10 09:29:14',
            ),
            6 => 
            array (
                'id' => 14,
                'section_id' => 6,
                'region_id' => 6,
                'created_at' => '2020-06-10 09:29:14',
                'updated_at' => '2020-06-10 09:29:14',
            ),
            7 => 
            array (
                'id' => 15,
                'section_id' => 7,
                'region_id' => 6,
                'created_at' => '2020-06-10 09:29:14',
                'updated_at' => '2020-06-10 09:29:14',
            ),
            8 => 
            array (
                'id' => 16,
                'section_id' => 9,
                'region_id' => 6,
                'created_at' => '2020-06-10 09:29:14',
                'updated_at' => '2020-06-10 09:29:14',
            ),
            9 => 
            array (
                'id' => 17,
                'section_id' => 10,
                'region_id' => 4,
                'created_at' => '2020-05-20 14:13:32',
                'updated_at' => '2020-05-20 14:13:32',
            ),
            10 => 
            array (
                'id' => 18,
                'section_id' => 11,
                'region_id' => 8,
                'created_at' => '2020-05-20 14:14:50',
                'updated_at' => '2020-05-20 14:14:50',
            ),
            11 => 
            array (
                'id' => 19,
                'section_id' => 12,
                'region_id' => 11,
                'created_at' => '2020-05-20 14:17:20',
                'updated_at' => '2020-05-20 14:17:20',
            ),
            12 => 
            array (
                'id' => 20,
                'section_id' => 13,
                'region_id' => 15,
                'created_at' => '2020-05-20 14:18:38',
                'updated_at' => '2020-05-20 14:18:38',
            ),
            13 => 
            array (
                'id' => 21,
                'section_id' => 14,
                'region_id' => 17,
                'created_at' => '2020-06-10 09:31:26',
                'updated_at' => '2020-06-10 09:31:26',
            ),
            14 => 
            array (
                'id' => 22,
                'section_id' => 15,
                'region_id' => 15,
                'created_at' => '2020-05-20 14:21:42',
                'updated_at' => '2020-05-20 14:21:42',
            ),
            15 => 
            array (
                'id' => 23,
                'section_id' => 16,
                'region_id' => 15,
                'created_at' => '2020-05-20 14:22:57',
                'updated_at' => '2020-05-20 14:22:57',
            ),
            16 => 
            array (
                'id' => 24,
                'section_id' => 17,
                'region_id' => 16,
                'created_at' => '2020-05-20 14:24:50',
                'updated_at' => '2020-05-20 14:24:50',
            ),
            17 => 
            array (
                'id' => 25,
                'section_id' => 18,
                'region_id' => 14,
                'created_at' => '2020-05-20 14:26:06',
                'updated_at' => '2020-05-20 14:26:06',
            ),
            18 => 
            array (
                'id' => 26,
                'section_id' => 19,
                'region_id' => 5,
                'created_at' => '2020-05-20 14:27:50',
                'updated_at' => '2020-05-20 14:27:50',
            ),
            19 => 
            array (
                'id' => 27,
                'section_id' => 20,
                'region_id' => 7,
                'created_at' => '2020-05-20 14:29:06',
                'updated_at' => '2020-05-20 14:29:06',
            ),
            20 => 
            array (
                'id' => 28,
                'section_id' => 21,
                'region_id' => 10,
                'created_at' => '2020-05-20 14:30:02',
                'updated_at' => '2020-05-20 14:30:02',
            ),
            21 => 
            array (
                'id' => 29,
                'section_id' => 22,
                'region_id' => 12,
                'created_at' => '2020-05-20 14:30:54',
                'updated_at' => '2020-05-20 14:30:54',
            ),
            22 => 
            array (
                'id' => 30,
                'section_id' => 23,
                'region_id' => 11,
                'created_at' => '2020-05-20 14:32:15',
                'updated_at' => '2020-05-20 14:32:15',
            ),
            23 => 
            array (
                'id' => 31,
                'section_id' => 24,
                'region_id' => 13,
                'created_at' => '2020-07-10 23:01:42',
                'updated_at' => '2020-07-10 23:01:42',
            ),
        ));
        
        
    }
}