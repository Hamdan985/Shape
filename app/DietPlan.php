<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietPlan extends Model
{
    protected $primaryKey = 'dpid';
    protected $table = 'dietplans';
    protected $guarded = [];   
    
}
