<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
  <title>A pousada</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background: #fff;
    }

    header {
      height: 50px;
      background: red;

    }

    .btn {
      border: 3px solid black;
      position: fixed;
      top: 50px;
      left: 0px;
      width: 50px;
      height: 44px;
      padding: 4px 8px;
      background: #262626;
      transition: 0.3s;
      z-index: 5;
      cursor: pointer;
      /* transition-delay: 500ms; */
      -webkit-transition: left 500ms;
      /* transition: left 500ms; */
    }

    .btn.active {
      /* background: blue; */
      left: 228px;
    }

    .btn.active .top {

      /* background-color: red; */
      -webkit-transform: translateY(10px) rotate(-135deg);
    }

    .btn.active .mid {
      -webkit-transform: scale(0);
    }

    .btn.active .bottom {
      -webkit-transform: translateY(-9px) rotate(135deg);
    }

    .btn span {
      background: #fff;
      width: 100%;
      height: 4px;
      display: block;
      margin: 5px 0;
    }

    main {
      display: flex;
      height: 3000px;
      /* background: blue; */
      z-index: 0;
    }

    main.active {
      background: #262626;
      /* opacity: 0.5; */
      z-index: 1;
    }

    .menu-background {
      top: 50px;
      bottom: 0;
      opacity: 0;
      background: #262626;
      position: absolute;
      height: 100%;
      width: 100%;
      z-index: 3;
    }

    .menu-background.active {
      opacity: 0.5;

    }

    aside.sidebar {
      width: 275px;
      background: purple;
      /* flex-shrink: 1; */
      position: fixed;
      top: 50px;
      left: 0px;
      bottom: 100px;
      transition: 0.1s;
      overflow-x: hidden;
      width: 0;
      z-index: 3;
    }

    aside.sidebar .menu {
      margin: 0;
      padding: 40px 0;
    }

    aside.sidebar ul {
      /* padding: 50px 0; */
      list-style: none !important;
      text-align: center;
      text-justify: center;

    }

    aside.sidebar ul li {
      width: 100%;
      height: 15px;
      list-style: none;
      font-family: sans-serif;
      font-size: 1.3em;
      padding: 25px 0;
      align-self: center;
      justify-self: center;
      justify-items: center;
      align-items: center;
      border: 2px solid yellow;
      text-decoration: none;
      position: relative;
    }

    aside.sidebar ul li a {
      position: absolute;
      top: 0;
      display: block;
      padding: 10px 0;
      list-style: none !important;
      text-decoration: none !important;

    }

    aside.sidebar ul li div {
      /* position: absolute; */
      border: 2px solid green;
      height: 100%;
      width: 100%;
    }

    aside.sidebar ul li a:hover {
      text-decoration: none;
      color: black;
    }

    a {
      color: black;
      list-style: none !important;
      text-transform: uppercase;
      text-decoration: none;

    }

    aside.sidebar.active {
      background: brown;
      width: 475px;
    }

    section {
      /* background: aqua; */
      flex-shrink: 5;
      flex-grow: 1;
    }

    main aside.anuncio {
      flex-basis: 300px;
      flex-shrink: 2;
      /* background: yellow; */

    }

    footer {
      height: 100px;
      background: green;
    }
  </style>
</head>

<body>


  @hasSection ('body')
  <header>

  </header>
  @yield('body')
  <main id="main">


  </main>


  <footer>

  </footer>
  <div>

  </div>
  <div id="btn" class="btn">
    <span class="top"></span>
    <span class="mid"></span>
    <span class="bottom"></span>
  </div>
  <div class="menu-background" id="menu-background">

  </div>

  <aside class="anuncio">

  </aside>

  <aside class="sidebar" id="sidebar">
    <ul class="menu" style="list-style:none" id="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">Fotos</a>
        <ul>
          <!-- <li><a href="#">A pousada</a></li>
<li><a href="#">Turismo</a></li>
<li><a href="#">Eventos</a></li> -->
        </ul>
      </li>

      <li><a href="#">Serviços</a>
        <ul >
          <li><a href="#">Guia turístico</a></li>
          <li><a href="#">Massagem e bem estar</a></li>
          <li><a href="#">Alugueis</a></li>
          <li><a href="#">Culinária</a></li>
        </ul>
      </li>
      <li><a href="#">Login/Cadastre-se</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
  </aside>

  @endif
  @yield('footer')

</body>

</html>


<script>
  var sidebar = document.querySelector('#sidebar');
  var sidebarBtn = document.querySelector('#btn');
  var menuBackGround = document.querySelector('#main');

  var menu = document.getElementById('menu');
  console.log(menu);
  style = getComputedStyle(menu);
  console.log(style);

  sidebarBtn.addEventListener('click', function(event) {
    if (this.classList.contains('active')) {
      this.classList.remove('active');
      sidebar.classList.remove('active');
      menuBackGround.classList.remove('active');
      //  console.log('tem classe');

    } else {
      this.classList.add('active');
      sidebar.classList.add('active');
      menuBackGround.classList.add('active');
      //  console.log('nao tem classe ');
    }
  });
</script>




<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="/">Home <span class="sr-only">(página atual)</span></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Fotos
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="/fotos/apousada">A pousada</a>
<a class="dropdown-item" href="/fotos/turismo">Turismo</a>
<a class="dropdown-item" href="/fotos/eventos">Eventos</a>

</div>

</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Serviços
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="/servicos/culinaria">Culinária</a>
<a class="dropdown-item" href="/servicos/massagem-e-estetica">Massagem e estética</a>
<a class="dropdown-item" href="/servicos/guia">Guia turístico</a>

</div>

</li>




<li class="nav-item">
<a class="nav-link" href="/login2">Login/Cadastre-se</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/contato">Contato</a>
</li>

</ul>

</div>
</nav> -->