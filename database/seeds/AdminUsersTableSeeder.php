<?php

use App\Models\AdminUser;
use Carbon\Carbon;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminConfig = config('admin_custom.admin');

        $adminUser = AdminUser::create([
            'username' => $adminConfig['username'],
            'name'     => $adminConfig['name'],
            'email' => $adminConfig['email'],
            'password' => bcrypt($adminConfig['password']),
            'email_verified_at' => Carbon::now()
        ]);

        $adminUser->roles()->sync([Role::first()->id]);
    }
}
