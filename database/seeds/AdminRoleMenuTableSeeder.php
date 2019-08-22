<?php

use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminRoleMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_role_menu')->truncate();

        $roles = config('admin_custom.roles');
        foreach ($roles as $role) {
            $roleId = Role::whereSlug($role['slug'])->first()->id;
            foreach ($role['menu'] as $menuTitle) {
                /** @var Menu $menuModel */
                $menuModel = Menu::whereTitle($menuTitle)->first();
                $menuModel->roles()->syncWithoutDetaching([$roleId]);
            }
        }
    }
}
