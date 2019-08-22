<?php

use Encore\Admin\Auth\Database\Permission;
use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = config('admin_custom.permissions');
        foreach ($permissions as $permission) {
            Permission::updateOrCreate([
                'slug'        => $permission['slug'],
            ], [
                'name'        => $permission['name'],
                'http_method' => $permission['http_method'],
                'http_path'   => $permission['http_path'],
            ]);
        }
    }
}
