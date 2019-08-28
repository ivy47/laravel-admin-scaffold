<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
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
    use MustVerifyEmail,
        CanResetPassword,
        Notifiable,
        Sluggable;

    protected $fillable = [
        'username',
        'password',
        'name',
        'avatar',
        'email',
        'email_verified_at'
    ];

    public function sluggable(): array
    {
        return [
            'username' => [
                'source' => 'name',
                'separator' => '_'
            ]
        ];
    }

}
