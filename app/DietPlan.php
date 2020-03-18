<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietPlan extends Model
{
    protected $table = 'dietplan';
    protected $primaryKey = 'dpid';  
    protected $guarded = [];   
    
}
