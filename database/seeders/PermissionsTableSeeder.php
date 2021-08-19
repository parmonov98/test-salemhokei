<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'Просмотр списка пользователей',
                'slug' => 'user.view',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Создание записи пользователя',
                'slug' => 'user.create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Редактирование записи пользователя',
                'slug' => 'user.edit',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Удаление записи пользователя',
                'slug' => 'user.delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 55,
                'name' => 'Просмотр списка альбомов',
                'slug' => 'album.view',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 56,
                'name' => 'Создание альбома',
                'slug' => 'album.create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 57,
                'name' => 'Редактирование альбома',
                'slug' => 'album.edit',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 58,
                'name' => 'Удаление альбома',
                'slug' => 'album.delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 59,
                'name' => 'Просмотр списка видео',
                'slug' => 'video.view',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 60,
                'name' => 'Создание записи видео',
                'slug' => 'video.create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 61,
                'name' => 'Редактирование записи видео',
                'slug' => 'video.edit',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 62,
                'name' => 'Удаление записи видео',
                'slug' => 'video.delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 63,
                'name' => 'Просмотр списка статичных страниц',
                'slug' => 'page.view',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 64,
                'name' => 'Создание статичных страниц',
                'slug' => 'page.create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 65,
                'name' => 'Редактирование статичных страниц',
                'slug' => 'page.edit',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 66,
                'name' => 'Удаление статичных страниц',
                'slug' => 'page.delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 68,
                'name' => 'Просмотр списка ролей пользователей',
                'slug' => 'user_role.view',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 69,
                'name' => 'Создание ролей пользователей',
                'slug' => 'user_role.create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 70,
                'name' => 'Редактирование ролей пользователей',
                'slug' => 'user_role.edit',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 71,
                'name' => 'Удаление ролей пользователей',
                'slug' => 'user_role.delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 76,
                'name' => 'Просмотр секций',
                'slug' => 'section.view',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 77,
                'name' => 'Создание секции',
                'slug' => 'section.create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 78,
                'name' => 'Редактирование секций',
                'slug' => 'section.edit',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 79,
                'name' => 'Удаление секций',
                'slug' => 'section.delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 80,
                'name' => 'Просмотр новостей',
                'slug' => 'article.view',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 81,
                'name' => 'Создание новостей',
                'slug' => 'article.create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 82,
                'name' => 'Редактирование новостей',
                'slug' => 'article.edit',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 83,
                'name' => 'Удаление новостей',
                'slug' => 'article.delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}