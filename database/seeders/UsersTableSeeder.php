<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Редактор-1',
                'surname' => 'Жаксылык',
                'description' => 'I love to play dota 2',
                'phone' => '77011234567',
                'published' => '1',
                'role' => 0,
                'avatar' => '/assets/img/avatars/m1.png',
                'sex' => '0',
                'slug' => NULL,
                'birthday_at' => '1994-05-03 05:00:00',
                'email' => 'redactor@info.kz',
                'email_verified_at' => NULL,
                'iin' => NULL,
                'bin' => NULL,
                'password' => '$2y$10$LS8mjz6nwvm/e8d1I1r3lONSSfqdKsDX0W6eY7JcZKK1b5OK5V/lG',
                'remember_token' => 'wO3nb0lWXDTCvariiDbcJ1L5KPVbzZicDWih5D1PiJHSuOllEFdBdBaELteN',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-06-08 10:21:38',
            ),
            1 => 
            array (
                'id' => 13,
                'name' => 'Марина',
                'surname' => NULL,
                'description' => NULL,
                'phone' => NULL,
                'published' => '0',
                'role' => 0,
                'avatar' => NULL,
                'sex' => '0',
                'slug' => NULL,
                'birthday_at' => NULL,
                'email' => 'marina@info.kz',
                'email_verified_at' => '2020-06-08 10:23:52',
                'iin' => NULL,
                'bin' => NULL,
                'password' => '$2y$10$5LI3JoczhY1TuBMu0NcAO.sY9fiVWu6o6mnS61Aaej/Myp2C.OQGK',
                'remember_token' => '48d0FgmLVKlR3DWi4tlNRtwPDjRoreS5vUIc5AV9cBqWvJekkdlu9rlYLX6r',
                'deleted_at' => NULL,
                'created_at' => '2020-06-08 10:23:52',
                'updated_at' => '2020-06-08 10:23:52',
            ),
            2 => 
            array (
                'id' => 14,
                'name' => 'Администратор Salem Hokei',
                'surname' => NULL,
                'description' => NULL,
                'phone' => NULL,
                'published' => '0',
                'role' => 0,
                'avatar' => NULL,
                'sex' => '0',
                'slug' => NULL,
                'birthday_at' => NULL,
                'email' => 'salem.hokei@yandex.kz',
                'email_verified_at' => '2020-07-02 07:13:37',
                'iin' => NULL,
                'bin' => NULL,
                'password' => '$2y$10$iqom/qLSfc7eXQRq9Q.pcO123g/Ewx7N8xEVM/sKXsj2ojNrLtvXe',
                'remember_token' => 'unS2hXiGEWcDVrw4kvZDcv80mOTyGfDxpcld852gz8XeBdiMoXWgMO2ZxJ99',
                'deleted_at' => NULL,
                'created_at' => '2020-07-02 07:13:38',
                'updated_at' => '2020-07-02 07:13:38',
            ),
            3 => 
            array (
                'id' => 15,
                'name' => 'Трушков Михаил',
                'surname' => NULL,
                'description' => NULL,
                'phone' => NULL,
                'published' => '0',
                'role' => 0,
                'avatar' => NULL,
                'sex' => '0',
                'slug' => NULL,
                'birthday_at' => NULL,
                'email' => 'trushkov@icehockey.kz',
                'email_verified_at' => '2021-07-27 00:56:57',
                'iin' => NULL,
                'bin' => NULL,
                'password' => '$2y$10$/QIxNmFKYSeDqHKWsb3Sy.a/n.EaY1Fyyr9qiKtiukpN9mT9OfgqC',
                'remember_token' => 'rJPQ6ClzmIMlOTMdaTqLRPTY7MNNTHN7aissJMpCFfstR3pqmbRGfb0dzPdu',
                'deleted_at' => NULL,
                'created_at' => '2021-07-27 00:56:57',
                'updated_at' => '2021-07-27 00:56:57',
            ),
        ));
        
        
    }
}