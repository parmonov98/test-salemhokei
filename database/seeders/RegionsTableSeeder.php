<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name_ru' => 'Акмолинская область',
                'name_kk' => 'Ақмола облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:12:23',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'id' => 5,
                'name_ru' => 'Актюбинская область',
                'name_kk' => 'Ақтөбе облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:12:31',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'id' => 6,
                'name_ru' => 'Алматинская область',
                'name_kk' => 'Алматы облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:12:41',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'id' => 7,
                'name_ru' => 'Атырауская область',
                'name_kk' => 'Атырау облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:12:48',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'id' => 8,
                'name_ru' => 'Восточно-Казахстанская область',
                'name_kk' => 'ШҚО',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:12:54',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'id' => 9,
                'name_ru' => 'Жамбылская область',
                'name_kk' => 'Жамбыл облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:01',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'id' => 10,
                'name_ru' => 'Западно-Казахстанская область',
                'name_kk' => 'БҚО',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:06',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'id' => 11,
                'name_ru' => 'Карагандинская область',
                'name_kk' => 'Қарағанды облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:12',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'id' => 12,
                'name_ru' => 'Костанайская область',
                'name_kk' => 'Қостанай облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:22',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'id' => 13,
                'name_ru' => 'Кызылординская область',
                'name_kk' => 'Қызылорда облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:32',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'id' => 14,
                'name_ru' => 'Мангистауская область',
                'name_kk' => 'Маңғыстау облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:41',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'id' => 15,
                'name_ru' => 'Павлодарская область',
                'name_kk' => 'Павлодар облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:47',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'id' => 16,
                'name_ru' => 'Северо-Казахстанская область',
                'name_kk' => 'СҚО',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:13:55',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'id' => 17,
                'name_ru' => 'Туркестанская область',
                'name_kk' => 'Түркістан облысы',
                'name_en' => NULL,
                'created_at' => '2020-04-08 13:14:01',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}