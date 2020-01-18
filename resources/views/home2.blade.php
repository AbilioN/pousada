<meta name="csrf-token" content="{{csrf_token()}}">
@extends('layout.app')

<script>

</script>

@section('body')
    <h1>Home Usuario</h1>
    <h2>Bem vindo, {{ $user->perfil->nome }}!</h2>

    <!-- <form action="{{route('get-user-data')}}" method="GET">
        
        <button>Meus Dados</button>
    </form>

    <form id="logout-form" action="{{ route('logout')}}" method="POST">
    @csrf
    <button type="submit">Sair</button>
    </form> -->
    
   
@endsection