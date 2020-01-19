<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'rits_admin',
            'email' => 'admin@rits.com.br',
            'role_id' => 1,
            'password' => bcrypt('12345678'),
        ]);
    }
}
