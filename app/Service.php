<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubService;
class Service extends Model
{
    function subServices()
    {
        // dd(gettype($Service));
       return $this->hasMany('App\SubService');
        
    }
}
