<meta name="csrf-token" content="{{csrf_token()}}">
@extends('layout.app')

<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }

    });
    function newServicePost()
    {

    }
    var variavel = '<h1>vai tomar no cu</h1>'
    
    
    function serviceForm()
    {
        let html =
    `<form action="{{ route('newService') }}" method="POST" name="token" >
            @csrf
            <div  class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Selecione o serviço</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Hospedagem</option>
            <option>Cozinha</option>
            <option>Alugueis</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Selecione a modalidade</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>Modalidade 1</option>
            <option>Modalidade 2</option>
            <option>Modalidade 3</option>
            <option>Modalidade 4</option>
            <option>Modalidade 5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Gostaria de adicionar alguma observação ou comentário? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
            </div>
        </form>` 
        // console.log('funcao')
        // console.log(html)
        // var c = '<h1> Arhye </h1>'
        $('#section').append(html)
        // $('#section')
        

    } 
</script>

@section('body')
    <h1>Home Usuario</h1>
    <p>One piece é sensacional 2!</p>
    <p>Bem vindo {{$user->name}} !</p>

    <div>
    
    <button onclick="serviceForm()" type="button" class="btn btn-primary">Solicitar Atendimento</button>
    <button type="button" class="btn btn-secondary">Saldo parcial</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    </div>

    <div id="section">
            <!-- <meta name="csrf-token" content="{{ csrf_token()}}"> -->
            <!-- <form action="{{ route('newService') }}" method="POST" name="token" >
            @csrf-token
            <div  class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Selecione o serviço</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Hospedagem</option>
            <option>Cozinha</option>
            <option>Alugueis</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Selecione a modalidade</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>Modalidade 1</option>
            <option>Modalidade 2</option>
            <option>Modalidade 3</option>
            <option>Modalidade 4</option>
            <option>Modalidade 5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Gostaria de adicionar alguma observação ou comentário? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
            </div>
        </form> -->
    </div>
@endsection