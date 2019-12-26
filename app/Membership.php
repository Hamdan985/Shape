<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'membership';
    protected $primaryKey = 'mid';  
    protected $guarded = [];   
 
}
