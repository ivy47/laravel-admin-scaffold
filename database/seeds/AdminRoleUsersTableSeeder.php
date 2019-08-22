<?php

use App\Models\AdminUser;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Database\Seeder;

class AdminRoleUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::whereUsername('admin')->first()->roles()->sync(Role::whereSlug('administrator')->first()->id);
    }
}
