<meta name="csrf-token" content="{{csrf_token()}}">
@extends('layout.app')

@section('body')
    <h1>Home Usuario</h1>
    
    <form id="logout-form" action="{{ route('logout')}}" method="POST">
    @csrf
    <button type="submit">Sair</button>

    </form>
 
@endsection