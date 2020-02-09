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


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/491216a0c1.js" crossorigin="anonymous"></script>

    <title>Document</title>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .sidebar nav ul {
            list-style: none;
        }

        .main {
            background: red;
            height: 500px;
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
        }

        .click-catcher.active {
            opacity: 0.5;
        }

        .sidebar {
            background: transparent;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 600px;
            transition: transform 0.5s ease-in-out;
            transform-origin: center left;
            /* transform: scaleX(0); */
            transform: translateX(-80%);

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
    </style>
</head>

<body style="position: relative">


    <div class="main">
        @yield('body')
    </div>
    <div class="click-catcher"></div>
    <div class="sidebar">

        <nav>
            <ul>
                <li>
                    <a href="#">Item 1<i class="fas fa-chevron-circle-down"></i></a>
                    <ul>
                        <li><a href="#">Subitem 1</a></li>
                        <li><a href="#">Subitem 2</a></li>
                        <li><a href="#">Subitem 3</a></li>
                        <li><a href="#">Subitem 4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Item 2<i class="fas fa-chevron-circle-down"></i></a>
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


                @if(isset($user))

                <li>
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
                </li>
                @endif





            </ul>
        </nav>
        <div class="button-container">
            <button onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
        </div>
    </div>


    <script>
        $('.click-catcher').on('click', (event) => {
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