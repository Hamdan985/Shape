<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'customer';
    
    protected $hidden = ['password'];

    protected $guarded = [];
    
    protected $primaryKey = 'cid';
}
