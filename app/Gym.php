<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Gym extends Authenticatable
{
    use Notifiable;

    protected $guard = 'gym';
    
    protected $hidden = ['password'];

    protected $guarded = [];
    
    protected $primaryKey = 'gid';
}
