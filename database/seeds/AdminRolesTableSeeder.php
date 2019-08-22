<?php

use Encore\Admin\Auth\Database\Role;
use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{

    private $table = 'admin_roles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = config('admin_custom.roles');
        foreach ($roles as $role) {
            Role::updateOrCreate([
                'slug' => $role['slug'],
            ], [
                'name' => $role['name'],
            ]);
        }
    }
}
