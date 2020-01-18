<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersData extends Model
{
    public $timestamps = false;

    public  function getAllUsersData()
    {
        return UsersData::all();
    }
}
