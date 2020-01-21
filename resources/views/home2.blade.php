<meta name="csrf-token" content="{{csrf_token()}}">
@extends('layout.app')

<script>

</script>

@section('body')
    <h1>Home Usuario</h1>
    <p>One piece é sensacional 2!</p>
    <p>Bem vindo {{$user->name}} !</p>

@endsection