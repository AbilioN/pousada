<meta name="csrf-token" content="{{csrf_token()}}">
@extends('layout.app')
@section('body')
    <h1>login cadastro</h1>

    <style>
      .alert {
        font-size: 20px;
      }
      .mensagemErro{
        width: 100%;
        margin: auto;
      }
    </style>

  
  
  <div class="container col-2 ">
      <form action="/login2" method="POST">
        @csrf

      <div class="form-group">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email" name="email">
        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" id="password" name="password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
      </div>
      <div class="mensagemErro">
        
        @include('flash::message')

      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
]      <a href="/registrar" class="btn btn-primary">Registrar</a>
    </form>
  </div>



@endsection