<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'user_id' => 3,
                'created_at' => '2020-03-26 14:28:45',
                'updated_at' => '2020-03-26 14:28:45',
            ),
            1 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'user_id' => 9,
                'created_at' => '2020-03-26 14:33:11',
                'updated_at' => '2020-03-26 14:33:11',
            ),
            2 => 
            array (
                'id' => 9,
                'role_id' => 1,
                'user_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'role_id' => 1,
                'user_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 11,
                'role_id' => 1,
                'user_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}