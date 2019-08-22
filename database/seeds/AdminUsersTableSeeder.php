<?php

use App\Models\AdminUser;
use Carbon\Carbon;
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
        AdminUser::updateOrCreate([
            'username' => $adminConfig['username'],
        ],[
            'name'     => $adminConfig['name'],
            'email' => $adminConfig['email'],
            'password' => bcrypt($adminConfig['password']),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
