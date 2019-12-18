@extends('layout.app')
@section('body')


<style>

    .registrar{
        padding-top: 30px;
    }
</style>

<div class="container registrar">
    <div class="row justify-content-center">
        <div class="col md-8" >
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">nome</label>

                    <div class="col-md-6">
                        <input type="text" id="name" value="{{ old('name') }}" name="name">

                    </div>

                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">email</label>
                    <div class="col-md-6">
                        <input type="email" value="{{ old('email') }}" name="email" id="email">

                    </div>

                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right" >senha</label>
                    <div class="col-md-6">
                        <input type="password" name="password" id="password">

                    </div>

                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right" >Confirmação de senha</label>
                    <div class="col-md-6">
                        <input type="password" name="password_confirmation" id="password_confirm">

                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

</div>

@endsection