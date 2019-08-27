<?php

use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Encore\Admin\Auth\Database\Menu::truncate();
        Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "id" => 1,
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Dashboard",
                    "icon" => "fa fa-dashboard",
                    "uri" => "/",
                    "permission" => "dashboard",
                    "created_at" => "2019-08-21 15:27:58",
                    "updated_at" => "2019-08-21 15:27:58"
                ],
                [
                    "id" => 2,
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Admin",
                    "icon" => "fa-tasks",
                    "uri" => "",
                    "permission" => "*",
                    "created_at" => "2019-08-21 15:27:58",
                    "updated_at" => "2019-08-21 15:27:58"
                ],
                [
                    "id" => 3,
                    "parent_id" => 2,
                    "order" => 3,
                    "title" => "Users",
                    "icon" => "fa-users",
                    "uri" => "auth/users",
                    "permission" => "*",
                    "created_at" => "2019-08-21 15:27:58",
                    "updated_at" => "2019-08-21 15:27:58"
                ],
                [
                    "id" => 4,
                    "parent_id" => 2,
                    "order" => 4,
                    "title" => "Roles",
                    "icon" => "fa-user",
                    "uri" => "auth/roles",
                    "permission" => "*",
                    "created_at" => "2019-08-21 15:27:58",
                    "updated_at" => "2019-08-21 15:27:58"
                ],
                [
                    "id" => 5,
                    "parent_id" => 2,
                    "order" => 5,
                    "title" => "Permission",
                    "icon" => "fa-ban",
                    "uri" => "auth/permissions",
                    "permission" => "*",
                    "created_at" => "2019-08-21 15:27:58",
                    "updated_at" => "2019-08-21 15:27:58"
                ],
                [
                    "id" => 6,
                    "parent_id" => 2,
                    "order" => 6,
                    "title" => "Menu",
                    "icon" => "fa-bars",
                    "uri" => "auth/menu",
                    "permission" => "*",
                    "created_at" => "2019-08-21 15:27:58",
                    "updated_at" => "2019-08-21 15:27:58"
                ],
                [
                    "id" => 7,
                    "parent_id" => 2,
                    "order" => 7,
                    "title" => "Operation log",
                    "icon" => "fa-history",
                    "uri" => "auth/logs",
                    "permission" => "*",
                    "created_at" => "2019-08-21 15:27:58",
                    "updated_at" => "2019-08-21 15:27:58"
                ]
            ]
        );

        Encore\Admin\Auth\Database\Permission::truncate();
        Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "id" => 1,
                    "name" => "All permission",
                    "slug" => "*",
                    "http_method" => "",
                    "http_path" => "",
                    "created_at" => NULL,
                    "updated_at" => "2019-08-21 15:26:27"
                ],
                [
                    "id" => 2,
                    "name" => "Dashboard",
                    "slug" => "dashboard",
                    "http_method" => "GET",
                    "http_path" => "/",
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "id" => 3,
                    "name" => "Login",
                    "slug" => "auth.login",
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout",
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "id" => 4,
                    "name" => "User setting",
                    "slug" => "auth.setting",
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting",
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "id" => 5,
                    "name" => "Auth management",
                    "slug" => "auth.management",
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
                    "created_at" => NULL,
                    "updated_at" => NULL
                ]
            ]
        );

        Encore\Admin\Auth\Database\Role::truncate();
        Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "id" => 1,
                    "name" => "Администратор",
                    "slug" => "administrator",
                    "created_at" => "2019-08-21 11:27:07",
                    "updated_at" => "2019-08-21 14:57:49"
                ],
                [
                    "id" => 2,
                    "name" => "Пользователь",
                    "slug" => "user",
                    "created_at" => "2019-08-21 15:14:22",
                    "updated_at" => "2019-08-21 15:14:22"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 1,
                    "permission_id" => 1,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 3,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 4,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 2,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 2,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 3,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 4,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ]
            ]
        );

        // finish
    }
}
