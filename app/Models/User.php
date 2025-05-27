<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'facebook_id', 
        'avatar',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function comments()
{
    return $this->hasMany(Comments::class);
}
}
