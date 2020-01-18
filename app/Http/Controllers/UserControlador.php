<?php

namespace App\Http\Controllers;

use App\UsersData;
use Illuminate\Http\Request;

class UserControlador extends Controller
{
    public function index()
    {
        return view('login2');
    }

    public function getUserData()
    {
      $usersData = new UsersData();  
      $data =   $usersData->getAllUsersData();
      return response()->json($data);
    }
    
}
