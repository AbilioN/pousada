<meta name="csrf-token" content="{{csrf_token()}}">
@extends('layout.app')

@section('body')
    <h1>Home 2k</h1>
    
    <form id="logout-form" action="{{ route('logout')}}" method="POST">
    @csrf
    <button type="submit">Porra</button>

    </form>
    <button>Porra</button>
    <h3>Estou aqui</h3>
@endsection