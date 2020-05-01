<?php

    use Illuminate\Support\Facades\Auth;

    Auth::attempt([
        'email' => 'usuario@gmail.com',
        'password' => 'user123'
    ]);

    // Auth::logout();

    $user = Auth::user();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
    <title>Document</title>
    <style>

        /* inicialização do layout mais externo do body a sidebar */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* inicio da sidebar */
        .sidebar nav ul {
            list-style: none;
        }

        .main {

            height: 100%;
        }

        .click-catcher {
            background: black;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            z-index: -1;

        }

        .click-catcher.active {
            opacity: 0.5;
            z-index: 4;

            /* width: 0; */
            /* height: 0; */
        }

        .sidebar {
            background: transparent;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 400px;
            transition: transform 0.5s ease-in-out;
            transform-origin: center left;
            /* transform: scaleX(0); */
            transform: translateX(-80%);
            z-index: 5;

            display: flex;
            
            /* padrão, mas para deixar explicito */
            align-items: stretch; 
        }

        .sidebar nav {
            flex-basis: 80%;
            background: yellow;
        }

        .sidebar nav ul {
            display: flex;
            flex-direction: column;
        }


        .sidebar nav ul li a {
            text-decoration: none;
            color: black;
            font-size: 2em;
        }

        .sidebar .button-container {
            flex-basis: 20%;
            background: transparent;
            display: flex;
            justify-content: center;
        }

        .sidebar .button-container button {
            margin-top: 10px;
            width: 50px;
            height: 50px;
            transition: transform 0.25s 0.25s cubic-bezier(0.6, 0.05, 0.28, 0.91);
            border: 2px solid rgba(0, 0, 0, 0.1);
            padding: 10px;
            outline: none;
            background: rgba(0, 0, 0, 0.4);
            color: white;
            border-radius: 5px;
        }

        .sidebar .button-container button i {
            font-size: 24px;
            transition: transform 0.15s ease-in-out;
        }

        .sidebar .button-container button:hover i {
            transform: scale(1.075);
        }



        .sidebar.active .button-container button {
            transform: translateX(-180%);
        }


        .sidebar.active {
            /* transform: scaleX(1); */
            transform: translateX(0);
        }

        .sidebar nav ul li ul {
            display: none;
        }

        .sidebar nav ul li a {
            display: flex;
            align-items: center;
        }

        .sidebar nav ul li a i {
            transform: rotate(-90deg);
            transition: transform 0.4s ease-in-out;
            font-size: 20px;
            margin-left: 5px;
        }

        .sidebar nav ul li a.open i {
            transform: rotate(0deg);
        }

        .sidebar nav ul li {
            padding: 5px 10px;
            transition: 0.25s ease-in-out;
            transition-property: padding-left, background-color;
        }

        .sidebar nav ul li:hover {
            padding-left: 20px;
            background-color: rgba(0, 0, 0, 0.1)
        }

        /* fim da sidebar */

        body {
            background: linear-gradient(to bottom,#FFF14A , #3EB4EB , #A0EB81 );
        }
        .top-bar {
            display: flex;
            height: 147px;
            width: 100%;
            color: black;
            
            /* border: 6px solid black; */
            position: relative;
            align-content: center;
            justify-content: center;
            /* todo  : mover para cima quando acabar a implementação */
        }
        .logo{
            display: flex;
            flex-direction: row;
            /* border: 2px solid aqua; */
            /* height: 60px; */
            /* position: absolute; */
            position: relative;
            height: auto;
            width: 20%;
            /* align-self: center; */
            justify-content: center;
            align-items: center;
            /* box-sizing: border-box; */
        }
        .logo img{
            display: block;
            /* border: 2px solid green; */
            height: 100%;
            /* right: 0; */
            align-self: center;
            /* border: 3px solid green; */
        }
        .logo h3{
            display: block;
            font-family: fantasy;

            font-size: 3em;
            /* display: inline-block; */
            /* display block ou inline nao funcionando, provisoriamente vou por o tamanho no elemento pai mas isso temq ue ser resolvido */
            /* border: 3px solid red; */
            margin: auto;
        }
        .primeira{
            left: 0;
            transform: scaleX(-1);
        
        }
        .segunda{
            right: 0;
        }
        
        /* incicio do carrousel  */

        
    </style>
</head>

<body style="position: relative">
    <div class="container">

        <div class="top-bar">
            <div class="logo">
                <img class="primeira" src="{{asset('img/coqueiro.png')}}" alt="">
                <h3>
                    A pousada
                </h3>
                <img class="segunda" src="{{asset('img/coqueiro.png')}}" alt="">
            </div>
        </div>
    
        <div class="main">
            @yield('body')
        </div>
        <div class="click-catcher"></div>
        <div class="sidebar">
    
            <nav>
                <ul>
                    <li>
                        <a href="/">Home<i class="fas"></i></a>
                    </li>
                    <li>
                        <a href="#">Fotos<i class="fas fa-chevron-circle-down"></i></a>
                        <ul>
                            <li><a href="/fotos/apousada">A pousada</a></li>
                            <li><a href="/fotos/turismo">Turismo</a></li>
                            <li><a href="/fotos/eventos">Eventos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Serviços<i class="fas fa-chevron-circle-down"></i></a>
                        <ul>
                            <li><a href="/servicos/culinaria">Guia Turístico</a></li>
                            <li><a href="#">Alugueis</a></li>
                            <li><a href="/servicos/massagem-e-estetica">Massagem e Estética</a></li>
                            <li><a href="/servicos/culinaria">Culinária</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/login2" class="" >Login/Cadastre-se</a>
                    </li>
                    <li>
                        <a href="/contato" class="" >Contato</a>
                    </li>
    
    
    
                    @if(isset($user))
    
                    <!-- <li>
                        <a href="#">Bem vindo, {{ $user->name }}<i class="fas fa-chevron-circle-down"></i></a>
                        <ul>
                            <li><a href="#">Subitem 1</a></li>
                            <li><a href="#">Subitem 2</a></li>
                            <li><a href="#">Subitem 3</a></li>
                            <li><a href="#">Subitem 4</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#">Item 3<i class="fas fa-chevron-circle-down"></i></a>
                        <ul>
                            <li><a href="#">Subitem 1</a></li>
                            <li><a href="#">Subitem 2</a></li>
                            <li><a href="#">Subitem 3</a></li>
                            <li><a href="#">Subitem 4</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#">Item 3<i class="fas fa-chevron-circle-down"></i></a>
                        <ul>
                            <li><a href="#">Subitem 1</a></li>
                            <li><a href="#">Subitem 2</a></li>
                            <li><a href="#">Subitem 3</a></li>
                            <li><a href="#">Subitem 4</a></li>
                        </ul>
                    </li> -->
                    @endif
    
    
    
    
    
                </ul>
            </nav>
            <div class="button-container">
                <button onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
            </div>
        </div>
    </div>


    <script>

        let clickCatcher = $('.click-catcher');
        // console.log(clickCatcher);
        // console.log('caiofabip');

        $('.click-catcher').on('click', (event) => {
            console.log('click');
            $('.active').toggleClass('active');
            event.stopPropagation();
        });

        $('.sidebar nav ul li a').on('click', (event) => {
            $(event.target).next().slideToggle();
            $(event.target).toggleClass('open');
        });

        $('.sidebar nav ul li a').on('click', 'i', (event) => {
            $(event.target).parent().next().slideToggle();
            $(event.target).parent().toggleClass('open');
        });

        function toggleSidebar() {
            $('.sidebar').toggleClass('active');
            $('.click-catcher').toggleClass('active');
        }
    </script>


    @yield('footer')

</body>

</html>