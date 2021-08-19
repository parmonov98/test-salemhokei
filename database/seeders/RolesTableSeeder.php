<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Администратор',
                'slug' => 'admin',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'special' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Редактор',
                'slug' => 'redactor',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'special' => NULL,
            ),
        ));
        
        
    }
}