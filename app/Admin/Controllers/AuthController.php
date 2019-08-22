<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AuthController as BaseAuthController;

class AuthController extends BaseAuthController
{
    public function getLogin()
    {
        return $this->redirectPath();
    }

    public function redirectPath()
    {
        return redirect()->route('login');
    }
}
