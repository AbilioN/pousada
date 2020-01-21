<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;














use Illuminate\Support\Facades\Auth;

class ContatoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
        $contato = new Contato();
        $contato->assunto = $request['contatoAssunto'];
        $contato->nome = $request['contatoNome'];
        $contato->email  = $request['contatoEmail'];
        $contato->telefone = $request['contatoTelefone'];
        $contato->uf = $request['contatoUf'];
        $contato->mensagem = $request['contatoMensagem'];
        $contato->assunto = $request['contatoAssunto'];
        $contato->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
    }





















    public function teste(Request $request)
    {

        $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];
        // dd($credentials);

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::user();
            return view('home2', compact('user'));

            return view('home2',  compact('user'));
        }

        
        

        flash('Login ou senha incorretos.')->error();
        // return redirect($request->route());

        return redirect(route('login2'));

    }
}
