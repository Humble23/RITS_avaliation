<?php

use Illuminate\Database\Seeder;

class CustomizedPermissionsTableSeeder extends Seeder
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
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_candidates',
                'table_name' => 'candidates',
                'created_at' => '2020-01-19 15:16:38',
                'updated_at' => '2020-01-19 15:16:38',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_candidates',
                'table_name' => 'candidates',
                'created_at' => '2020-01-19 15:16:38',
                'updated_at' => '2020-01-19 15:16:38',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_candidates',
                'table_name' => 'candidates',
                'created_at' => '2020-01-19 15:16:38',
                'updated_at' => '2020-01-19 15:16:38',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_candidates',
                'table_name' => 'candidates',
                'created_at' => '2020-01-19 15:16:38',
                'updated_at' => '2020-01-19 15:16:38',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_candidates',
                'table_name' => 'candidates',
                'created_at' => '2020-01-19 15:16:38',
                'updated_at' => '2020-01-19 15:16:38',
            ),
        ));
        
        
    }
}