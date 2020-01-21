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
            <form action="{{ route('registrar') }}" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="registerNameInput" class="col-md-4 col-form-label text-md-right">Nome</label>

                    <div class="col-md-6">
                        <input type="text" id="name" value="{{ old('name') }}" name="name">

                    </div>

                </div>

                <div class="form-group row">
                    <label for="registerEmailInput" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input type="email" value="{{ old('email') }}" name="email" id="email">

                    </div>

                </div>
                <div class="form-group row">
                    <label for="registerPasswordInput" class="col-md-4 col-form-label text-md-right" >Senha</label>
                    <div class="col-md-6">
                        <input type="password" name="password" id="password">

                    </div>

                </div>

                <div class="form-group row">
                    <label for="registerPassword_confirmationInput" class="col-md-4 col-form-label text-md-right" >Confirmação de senha</label>
                    <div class="col-md-6">
                        <input type="password" name="password_confirmation" id="password_confirm">

                    </div>

                </div>
              
                <div class="form-group row">
                    <label for="registerRgInput" class="col-md-4 col-form-label text-md-right" >RG</label>
                    <div class="col-md-6">
                        <input type="text" name="rg" id="rg">

                    </div>

                </div>
                <div class="form-group row">
                    <label for="registerCpfInput" class="col-md-4 col-form-label text-md-right" >CPF</label>
                    <div class="col-md-6">
                        <input type="text" name="cpf" id="cpf">

                    </div>

                </div>
                
                <div class="form-group row">
                    <label for="registerPhoneInput" class="col-md-4 col-form-label text-md-right" >Telefone</label>
                    <div class="col-md-6">
                        <input type="text" name="phone" id="phone">

                    </div>

                </div>
                <div class="form-group row">
                    <label for="birthdate" class="col-md-4 col-form-label text-md-right" >Data de nascimento </label>
                    <div class="col-md-6">
                        <input type="text" name="birthdate" id="birthdate">

                    </div>

                </div>
                <div class="form-group row">
                    <label for="registerSexInput" class="col-md-4 col-form-label text-md-right" >Sexo</label>
                    <div class="col-md-6">
                        <select class="custom-select" id="sex" name="sex">
                        <option selected></option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>                        
                    </select>
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