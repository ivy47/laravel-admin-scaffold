<?php

namespace App\Models;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;


/**
 * Class AdminUser
 * @package App\Admin\Models
 */
class AdminUser extends \Encore\Admin\Auth\Database\Administrator implements
    CanResetPasswordContract,
    MustVerifyEmailContract
{
    use MustVerifyEmail, CanResetPassword, Notifiable;

    protected $fillable = ['username', 'password', 'name', 'avatar', 'email', 'email_verified_at'];

}
