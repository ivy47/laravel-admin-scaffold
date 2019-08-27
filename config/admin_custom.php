<?php

return [
    'admin' => [
        'username' => 'admin',
        'name' => 'Administrator',
        'email' => env('ADMIN_EMAIL', 'admin@admin.com'),
        'password' => env('ADMIN_PASSWORD', 'admin')
    ],
];