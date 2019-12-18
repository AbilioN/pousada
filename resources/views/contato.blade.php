<head> 
    <meta name="csrf-token" content="{{csrf_token()}}">

        <style>
            .alinhamento{
                align-self: center;
                margin-left: auto;
                margin-right: auto;
            }
            .espaco{
                margin-top: 15px;
            }
        </style>
</head>



@extends('layout.app')
@section('body')
    <h1>Contato</h1>

    <form action="/contato" method="POST">
    @csrf
            <div class="form-group espaco">
                    <label for="contatoAssuntoInput">Selecione o Assunto</label>
                    <select class="form-control" name="contatoAssunto" id="contatoAssunto">
                      <option>Reserva</option>
                      <option>Informações</option>
                      <option>Atendimento</option>
                      <option>Fornecedor</option>
                      <option>Candidatar-me a vagas</option>
                    </select>
                  </div>
            <div class="form-group espaco">
              
              <div class="form-row">
                  <div class="col col-8">
                        <label for="contatoNomeInput">Nome</label>
                        <input type="text" class="form-control" id="contatoNome" name="contatoNome" placeholder="nome">
                  </div>
                  <div class="col col-4">
                      <label for="">Endereço de email</label>
                      <input type="email" class="form-control" id="contatoEmail" name="contatoEmail" placeholder="nome@exemplo.com">

                  </div>

              </div>
            </div>
        
            <div class="form-group espaco">
                
                <div class="form-row">
                    
                    <div class="col col-3">
                        <label for="contatoTelefoneInput">Telefone</label>
                        <input type="text" class="form-control" id="contatoTelefone" name="contatoTelefone" placeholder="(__)____ - ____">

                    </div>
                    <div class="col col-3">
                            <label for="contatoUfInput">Selecione o Estado</label>
                            <select class="form-control" id="contatoUf" name="contatoUf">
                              <option>RN</option>
                              <option>CE</option>
                              <option>PB</option>
                              <option>AL</option>
                              <option>BA</option>
                            </select>
                    </div>
                </div>
                
            </div>
            <div class="form-group espaco">
              <label for="contatoMensagemInput">Mensagem</label>
              <textarea class="form-control" id="contatoMensagem" name="contatoMensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary alinhamento" >Enviar</button>
          </form>

          
@endsection