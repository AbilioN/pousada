<style>

    h3{
        color: black;
    }
    p {
        color: black;
    }
    .container.anuncio{
        max-height: 150px;
        position: relative;
    }
    img{
        position: relative;
    }
    .foto{
        max-height: 450px;
    }
    .anuncio{
        height: 450px;
    }
    .conteiner{
        height: 450px;
        position: absolute;
    }
</style>

@extends('layout.app')
@section('body')
    <h1>turismo</h1>
    <div class="container anuncio">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner conteiner">
                      <div class="carousel-item active anuncio">
                        <img class="d-block w-100 foto" src="{{asset('img/pedalada1.jpg')}}" alt="Primeiro Slide">
                        <div class="carousel-caption d-none d-md-block">
                                <h3>Titulo2</h3>
                                <p>texto2</p>
                              </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 foto" src="{{asset('img/trilha2.jpg')}}" alt="Segundo Slide">
                        <div class="carousel-caption d-none d-md-block">
                                <h3>Titulo1</h3>
                                <p>texto1</p>
                              </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 foto" src="{{asset('img/pedalada4.jpg')}}" alt="Terceiro Slide">
                        <div class="carousel-caption d-none d-md-block">
                                <h3>Titulo3</h3>
                                <p>texto3</p>
                              </div>
                      </div>
                      <div class="carousel-item">
                            <img class="d-block w-100 foto" src="{{asset('img/trilha4.jpg')}}" alt="Quarto Slide">
                            <div class="carousel-caption d-none d-md-block">
                                    <h3>Titulo3</h3>
                                    <p>texto3</p>
                                  </div>
                          </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Próximo</span>
                    </a>
                  </div>
    
    </div>
@endsection

