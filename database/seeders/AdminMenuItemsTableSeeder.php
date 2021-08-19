<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu_items')->delete();
        
        \DB::table('admin_menu_items')->insert(array (
            0 => 
            array (
                'id' => 3,
                'label' => 'Хоккей',
                'label_ru' => 'Хоккей',
                'label_kk' => 'hockey',
                'link' => 'hockey',
                'link_kk' => 'http://test.salemhokei.loc/kk/hockey',
                'link_ru' => 'http://test.salemhokei.loc/ru/hockey',
                'parent' => 0,
                'sort' => 1,
                'class' => NULL,
                'menu' => 1,
                'depth' => 0,
                'created_at' => '2021-07-29 07:29:57',
                'updated_at' => '2021-08-18 09:54:25',
            ),
            1 => 
            array (
                'id' => 4,
                'label' => 'school',
                'label_ru' => 'Школы',
                'label_kk' => 'Мектептер',
                'link' => 'school',
                'link_kk' => 'http://test.salemhokei.loc/kk/schools',
                'link_ru' => 'http://test.salemhokei.loc/ru/schools',
                'parent' => 0,
                'sort' => 2,
                'class' => NULL,
                'menu' => 1,
                'depth' => 0,
                'created_at' => '2021-07-29 17:17:48',
                'updated_at' => '2021-07-30 02:37:09',
            ),
            2 => 
            array (
                'id' => 5,
                'label' => 'Экипировка',
                'label_ru' => 'Экипировка',
                'label_kk' => 'Жабдық',
                'link' => 'equipment',
                'link_kk' => 'http://test.salemhokei.loc/kk/equipment',
                'link_ru' => 'http://test.salemhokei.loc/ru/equipment',
                'parent' => 0,
                'sort' => 3,
                'class' => NULL,
                'menu' => 1,
                'depth' => 0,
                'created_at' => '2021-07-29 17:20:32',
                'updated_at' => '2021-07-30 02:37:09',
            ),
            3 => 
            array (
                'id' => 6,
                'label' => 'С чего начать?',
                'label_ru' => 'С чего начать?',
                'label_kk' => 'Неден бастау қажет?',
                'link' => 'faq',
                'link_kk' => 'http://test.salemhokei.loc/kk/faq',
                'link_ru' => 'http://test.salemhokei.loc/ru/faq',
                'parent' => 0,
                'sort' => 4,
                'class' => NULL,
                'menu' => 1,
                'depth' => 0,
                'created_at' => '2021-07-29 17:22:29',
                'updated_at' => '2021-07-30 06:59:20',
            ),
            4 => 
            array (
                'id' => 7,
                'label' => 'Новости',
                'label_ru' => 'Новости',
                'label_kk' => 'Жаңалықтар',
                'link' => 'Новости',
                'link_kk' => 'http://test.salemhokei.loc/kk/news',
                'link_ru' => 'http://test.salemhokei.loc/uz/news',
                'parent' => 0,
                'sort' => 5,
                'class' => NULL,
                'menu' => 1,
                'depth' => 0,
                'created_at' => '2021-07-29 17:24:20',
                'updated_at' => '2021-07-30 02:37:09',
            ),
            5 => 
            array (
                'id' => 8,
                'label' => 'ПРИВЕТ!',
                'label_ru' => 'SALEM!',
                'label_kk' => 'SALEM!',
                'link' => '/',
                'link_kk' => 'http://test.salemhokei.loc/kk/',
                'link_ru' => 'http://test.salemhokei.loc/ru/',
                'parent' => 0,
                'sort' => 0,
                'class' => NULL,
                'menu' => 1,
                'depth' => 0,
                'created_at' => '2021-07-30 02:36:16',
                'updated_at' => '2021-07-30 06:58:46',
            ),
        ));
        
        
    }
}