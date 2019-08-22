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
        $this->call([
            AdminUsersTableSeeder::class,
            AdminPermissionsTableSeeder::class,
            AdminRolesTableSeeder::class,
            AdminRolePermissionsTableSeeder::class,
            AdminMenuTableSeeder::class,
            AdminRoleMenuTableSeeder::class,
            AdminRoleUsersTableSeeder::class,
        ]);
    }
}
