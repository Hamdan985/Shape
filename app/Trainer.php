<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Trainer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'trainer';
    
    protected $hidden = ['password'];

    protected $primaryKey = 'tid';

    protected $guarded = [];   
}
