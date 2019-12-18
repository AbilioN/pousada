@extends('layout.app')
<head>
    <style>
        
        .pousada2{
            border: 2px solid red;  
        }
        .container.tamanho{
            height: 20px;
        }
        .asul{
          border: 1px solid blue;
        }

        img{
          
          
          height: 320px;
          width: auto;
          max-width: 440px;
          max-height: 450px;
          position: relative;
        }
        .conteiner{
          height: 400px;
          position: absolute;
        }
        </style>
    <link rel="stylesheet" href="{{asset('sass/app.scss')}}">
</head>
@section('body')


    <h1>A pousada</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm-5 conteiner">
          <img src="{{asset('img/pousadamain.jpg')}}" alt="">
        </div>
        <div class="col-sm-7">
          <h1>Titulo do texto</h1>
          <p>Texto ridicularmente chato que vai ficar aqui futuramente so pra encher linguica entao eu vou colar um lorem ipsum
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            </p>  
        </div>
      </div>
     

    </div>

    <tr></tr>

    <div class="container">
        <div class="row">
          <div class="col-sm-5 conteiner">
            <img src="{{asset('img/pousadamain2.jpg')}}" alt="">
          </div>
          <div class="col-sm-7">
            <h1>Titulo do texto</h1>
            <p>Texto ridicularmente chato que vai ficar aqui futuramente so pra encher linguica entao eu vou colar um lorem ipsum
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
  
              </p>  
          </div>
        </div>
       
  
      </div>
@endsection
