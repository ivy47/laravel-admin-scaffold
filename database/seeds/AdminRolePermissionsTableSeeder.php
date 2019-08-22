<?php

use Encore\Admin\Auth\Database\Permission;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Database\Seeder;

class AdminRolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = config('admin_custom.roles');
        foreach ($roles as $role) {
            $roleModel = Role::whereSlug($role['slug'])->first();
            $roleModel->permissions()->sync(Permission::whereIn('slug', $role['permissions'])->get()->pluck('id'));
        }
    }
}
