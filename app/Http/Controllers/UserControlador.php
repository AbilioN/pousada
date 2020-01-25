<?php

namespace App\Http\Controllers;

use App\UsersData;
use Illuminate\Http\Request;
use App\Service;

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
    public function newService(Request $request)
    {
     dd($request->email);
    }
}
