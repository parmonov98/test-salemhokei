<?php

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
                'class' => NULL,
                'created_at' => '2021-07-29 07:29:57',
                'depth' => 0,
                'id' => 3,
                'label' => 'Хоккей',
                'label_kk' => 'hockey',
                'label_ru' => 'Хоккей',
                'link' => 'hockey',
                'link_kk' => 'http://test.salemhokei.loc/kk/hockey',
                'link_ru' => 'http://test.salemhokei.loc/ru/hockey',
                'menu' => 1,
                'parent' => 0,
                'sort' => 1,
                'updated_at' => '2021-07-30 02:37:08',
            ),
            1 =>
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 17:17:48',
                'depth' => 0,
                'id' => 4,
                'label' => 'school',
                'label_kk' => 'Мектептер',
                'label_ru' => 'Школы',
                'link' => 'school',
                'link_kk' => 'http://test.salemhokei.loc/kk/schools',
                'link_ru' => 'http://test.salemhokei.loc/ru/schools',
                'menu' => 1,
                'parent' => 0,
                'sort' => 2,
                'updated_at' => '2021-07-30 02:37:09',
            ),
            2 =>
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 17:20:32',
                'depth' => 0,
                'id' => 5,
                'label' => 'Экипировка',
                'label_kk' => 'Жабдық',
                'label_ru' => 'Экипировка',
                'link' => 'equipment',
                'link_kk' => 'http://test.salemhokei.loc/kk/equipment',
                'link_ru' => 'http://test.salemhokei.loc/ru/equipment',
                'menu' => 1,
                'parent' => 0,
                'sort' => 3,
                'updated_at' => '2021-07-30 02:37:09',
            ),
            3 =>
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 17:22:29',
                'depth' => 0,
                'id' => 6,
                'label' => 'С чего начать?',
                'label_kk' => 'Неден бастау қажет?',
                'label_ru' => 'С чего начать?',
                'link' => 'faq',
                'link_kk' => 'http://test.salemhokei.loc/kk/faq',
                'link_ru' => 'http://test.salemhokei.loc/ru/faq',
                'menu' => 1,
                'parent' => 0,
                'sort' => 4,
                'updated_at' => '2021-07-30 06:59:20',
            ),
            4 =>
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 17:24:20',
                'depth' => 0,
                'id' => 7,
                'label' => 'Новости',
                'label_kk' => 'Жаңалықтар',
                'label_ru' => 'Новости',
                'link' => 'Новости',
                'link_kk' => 'http://test.salemhokei.loc/kk/news',
                'link_ru' => 'http://test.salemhokei.loc/uz/news',
                'menu' => 1,
                'parent' => 0,
                'sort' => 5,
                'updated_at' => '2021-07-30 02:37:09',
            ),
            5 =>
            array (
                'class' => NULL,
                'created_at' => '2021-07-30 02:36:16',
                'depth' => 0,
                'id' => 8,
                'label' => 'ПРИВЕТ!',
                'label_kk' => 'SALEM!',
                'label_ru' => 'SALEM!',
                'link' => '/',
                'link_kk' => 'http://test.salemhokei.loc/kk/',
                'link_ru' => 'http://test.salemhokei.loc/ru/',
                'menu' => 1,
                'parent' => 0,
                'sort' => 0,
                'updated_at' => '2021-07-30 06:58:46',
            ),
        ));


    }
}
