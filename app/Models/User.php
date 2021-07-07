<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// To verify email add implements MustVerifyEmail after Authenticatable
class User extends Authenticatable implements MustVerifyEmail
{
    // for MFA add TwoFactorAuthenticatable
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $guarded = [];
    protected $fillable = [
        'username',
        'email',
//        'firstname',
//        'lastname',
//        'jobtitle',
//        'bio',
//        'avatar',
//        'profile_img',
//        'provider_id',
//        'provider',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
