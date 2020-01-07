<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControlador extends Controller
{
    public function __construct()
    {
        // passagem do paramentro de qual guarda dentro de auth.php estará associado a este controlador.
        $this->middleware('auth');    
    }

    public function index()
    {
        return view('admin');
    }
}
