<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Setor;
use App\Categoria;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home2';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function login2(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $AuthOK = Auth::guard('web')->attempt($credentials);
        if ($AuthOK) {
            $user = Auth::user();
            $categorias = Setor::with('categorias.produtos')->get();
            // dd($categorias[0]->set);
            // $produtos  = Categoria::with('produtos')->get();
            return view('home2', compact('user', 'categorias'));
        } else {
            flash('Erro: usuário e senha inválidos');
            return redirect()->back();
        }
    }
    public function registrar(Request $request)
    {
        // dd($request['email']);
        $user = new User();
        $user->name = $request['name'];
        $user->email  = $request['email'];
        $user->phone = $request['phone'];
        $user->password = Hash::make($request['password']);
        $user->rg = $request['rg'];
        $user->cpf = $request['cpf'];
        $user->birthdate = $request['birthdate'];
        $user->sex = $request['sex'];
        // dd($user);
        $user->save();
    }
}
