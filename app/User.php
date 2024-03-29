<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['id', 'nome', 'email', 'senha', 'usuario', 'admin', 'login_pedidos'];
    protected $hidden = ['senha', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime',];
}
