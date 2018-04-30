<?php 

use App\User ; 

    $user = User::where('id', '=', '1')->first() ;


?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>POS</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <style>
        a:hover{
            text-decoration:none;
        }
    .pp{
        width:25%;
        height:100%;
        border-radius:50%;
        margin-right:-120px;
        opacity:0.9;
        position : relative ;
    }
    .pp:hover{
        opacity: 1 ;
        cursor: pointer;
    }
    .pp-title{
        color:whitesmoke;
        border-top-left-radius:100px;
        border-bottom-left-radius:100px;
        background-color:gray;
        padding:4px;
        margin-right:-25px;
    }
    .sadistic{
        
    }
    .sadistic:hover{

    }
    </style>
</head>
<body>
    <div id="app" class="">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel ">
            <div class="container">
                
                {{ $data = $user->foto}}

                
                
          

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar --><a class="navbar-brand" href="{{ url('/') }}">
                    CRUD
                </a>
                    <ul class="navbar-nav mr-auto ">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                <li>
                    <a href="{{ route('about') }}">
                    <span class="pp-title" style="">&nbsp;&nbsp;{{ "About Me!" }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <?= '<img class="pp" src="data:image/jpeg;base64,'.base64_encode($data).'"/>' ; ?>
                        <span class="pp-blind"></span>

                
                    </a>
                    
                </li>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
