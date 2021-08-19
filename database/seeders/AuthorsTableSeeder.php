<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('authors')->delete();
        
        \DB::table('authors')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Мухамед-Канапия',
                'alias' => '2-mukhamed-kanapiya',
            'annotation' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
            'description' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
                'avatar' => '/images/1573557000.jpg',
                'meta_title' => NULL,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'facebook_url' => NULL,
                'instagram_url' => NULL,
                'youtube_url' => NULL,
                'vk_url' => NULL,
                'twitter_url' => 'https://twitter.com/kanapiyaru',
                'site_url' => NULL,
                'views' => 0,
                'is_published' => 1,
                'created_at' => '2019-11-12 11:48:17',
                'updated_at' => '2019-12-09 14:10:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Мухамед-Канапия',
                'alias' => '2-mukhamed-kanapiya',
            'annotation' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
            'description' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
                'avatar' => '/images/1573557000.jpg',
                'meta_title' => NULL,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'facebook_url' => NULL,
                'instagram_url' => NULL,
                'youtube_url' => NULL,
                'vk_url' => NULL,
                'twitter_url' => 'https://twitter.com/kanapiyaru',
                'site_url' => NULL,
                'views' => 0,
                'is_published' => 1,
                'created_at' => '2019-11-12 11:48:17',
                'updated_at' => '2019-12-09 14:10:04',
            ),
        ));
        
        
    }
}