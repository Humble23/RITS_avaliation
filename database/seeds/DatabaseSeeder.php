<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CustomizedDataRowsTableSeeder::class);
        $this->call(CustomizedDataTypesTableSeeder::class);
        $this->call(CustomizedMenuItemsTableSeeder::class);
        $this->call(CustomizedMenusTableSeeder::class);
        $this->call(CustomizedPermissionRoleTableSeeder::class);
        $this->call(CustomizedPermissionsTableSeeder::class);
        $this->call(CustomizedSettingsTableSeeder::class);
    }
}
