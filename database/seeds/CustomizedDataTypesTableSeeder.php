<?php

use Illuminate\Database\Seeder;

class CustomizedDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuário',
                'display_name_plural' => 'usuários',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Função',
                'display_name_plural' => 'Funções',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-19 15:05:09',
                'updated_at' => '2020-01-19 15:05:09',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'candidates',
                'slug' => 'candidates',
                'display_name_singular' => 'Candidato',
                'display_name_plural' => 'Candidatos',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Models\\Candidate',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"created_at","order_direction":"desc","default_search_key":"name","scope":null}',
                'created_at' => '2020-01-19 15:16:38',
                'updated_at' => '2020-01-19 15:41:07',
            ),
        ));
        
        
    }
}