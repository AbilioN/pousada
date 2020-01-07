<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminLoginController extends Controller
{   
  

    public function __construct()
    {
        
        $this->middleware('guest:admin')->except('logout');
        // guest:admin refere-se ao convidado nao estar logado como admin 
    }

    public function login(Request $request)
    {
        $this->validate($request , [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

       $AuthOK =  Auth::guard('admin')->attempt($credentials , $request->remember());
       if($AuthOK){

            return redirect()->intended(route('admin-home'));
       }
    //    TODO: implementar resposta inteligente dependendo do retorno do model.


       return redirect()->back()->withInputs($request->only('email' , 'remember'));
       
     
    }

    public function index()
    {
        return view("auth.admin-login");
    }

    
}
