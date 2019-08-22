<?php

namespace App\Listeners;

use Encore\Admin\Auth\Database\Role;
use Illuminate\Auth\Events\Registered;

class AssignRoleToUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $roleId = Role::whereSlug('user')->first()->id;
        $event->user->roles()->sync($roleId);
    }
}
