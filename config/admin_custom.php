<?php

return [
    'admin' => [
        'id' => 1,
        'username' => 'admin',
        'name' => 'Administrator',
        'email' => env('ADMIN_EMAIL', 'admin@admin.com'),
        'password' => env('ADMIN_PASSWORD', 'admin')
    ],
    'menu' => [
        [
            'parent_title' => null,
            'order' => 1,
            'title' => 'Dashboard',
            'icon' => 'fa fa-dashboard',
            'uri' => '/',
            'permission' => 'dashboard',
        ],
        [
            'parent_title' => null,
            'order' => 2,
            'title' => 'Admin',
            'icon' => 'fa-tasks',
            'uri' => '',
            'permission' => '*',
        ],
        [
            'parent_title' => 'Admin',
            'order' => 3,
            'title' => 'Users',
            'icon' => 'fa-users',
            'uri' => 'auth/users',
            'permission' => '*',
        ],
        [
            'parent_title' => 'Admin',
            'order' => 4,
            'title' => 'Roles',
            'icon' => 'fa-user',
            'uri' => 'auth/roles',
            'permission' => '*',
        ],
        [
            'parent_title' => 'Admin',
            'order' => 5,
            'title' => 'Permission',
            'icon' => 'fa-ban',
            'uri' => 'auth/permissions',
            'permission' => '*',
        ],
        [
            'parent_title' => 'Admin',
            'order' => 6,
            'title' => 'Menu',
            'icon' => 'fa-bars',
            'uri' => 'auth/menu',
            'permission' => '*',
        ],
        [
            'parent_title' => 'Admin',
            'order' => 7,
            'title' => 'Operation log',
            'icon' => 'fa-history',
            'uri' => 'auth/logs',
            'permission' => '*',
        ],
    ],
    'permissions' => [
        [
            'name' => 'All permission',
            'slug' => '*',
            'http_method' => 'GET',
            'http_path' => '',
        ],
        [
            'name' => 'Dashboard',
            'slug' => 'dashboard',
            'http_method' => 'GET',
            'http_path' => '/',
        ],
        [
            'name' => 'Login',
            'slug' => 'auth.login',
            'http_method' => '',
            'http_path' => "/auth/login\r\n/auth/logout",
        ],
        [
            'name' => 'User setting',
            'slug' => 'auth.setting',
            'http_method' => 'GET,PUT',
            'http_path' => '/auth/setting',
        ],
        [
            'name' => 'Auth management',
            'slug' => 'auth.management',
            'http_method' => '',
            'http_path' => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
        ],
    ],
    'roles' => [
        [
            'name' => 'Администратор',
            'slug' => 'administrator',
            'permissions' => [
                '*',
            ],
            'menu' => [
            ],
        ],
        [
            'name' => 'Пользователь',
            'slug' => 'user',
            'permissions' =>
                [
                    'dashboard',
                    'auth.login',
                    'auth.setting',
                ],
            'menu' => [
            ],
        ],
    ],
];