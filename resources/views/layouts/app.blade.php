<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'vB Odysee') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/schoollife.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notification.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homework.css') }}" rel="stylesheet">
    <link href="{{ asset('css/schoolnews.css') }}" rel="stylesheet">
    <link href="{{ asset('css/startpage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timetable.css') }}" rel="stylesheet">
    <link href="{{ asset('css/example-table.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>  
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md nav-sci">
            <div class="container myDIV">
                <a class="navbar-brand d-flex nav-link" href="{{ url('/') }}">
                    <div class="">
                        <img src="/img/logo.png" alt="" style="max-height: 45px; border-right: 1px solid #333" class="pr-3"></div>
                    <div class="pl-3 pt-1 nav-textt-b">
                        von-Bülows Odysee
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Mid Of Navbar -->
                    <ul class="navbar-nav m-auto">
                        <!-- Authentication Links -->
                        @guest
                           
                            <li class="nav-item">
                                <a class="nav-link nav-textt nav-link-text {{ (request()->segment(1) == 'login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item ">
                                    <a class="nav-textt nav-link-text nav-link {{ (request()->segment(1) == 'h') ? 'active' : '' }}" href="/h">
                                        Hausaufgaben
                                    </a>
                            </li>
                            <li class="nav-item pl-3">
                                    <a class="nav-textt nav-link nav-link-text {{ (request()->segment(1) == 'm') ? 'active' : '' }}" href="/m">
                                        Noten
                                    </a>
                            </li>
                            <li class="nav-item pl-3">
                                    <a class="nav-textt nav-link nav-link-text {{ (request()->segment(1) == 't') ? 'active' : '' }}" href="/t">
                                        Stundenplan
                                    </a>
                            </li>
                        @endguest
                    </ul>
                    @auth    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nav-textt" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   
                                {{ Auth::user()->username }}
                                    
                                   <span class="caret"></span>
                                    <img src="{{ Auth::user()->profile->profileImage() }}" alt="" class="rounded-circle w-100 pb-1" style="max-width: 20px;">                                </a>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-textt" href="/profile/{{ Auth::user()->id }}">
                                        Profile
                                    </a>
                                    <a class="dropdown-item nav-textt" href="/profile/{{ Auth::user()->id }}/edit">
                                        Edit Profile
                                    </a>
                                    <a class="dropdown-item nav-textt" href="/me/update">
                                        Benachrichtigungen
                                    </a>
                                    <div class="dropdown-divder"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </div>
                            </li>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link nav-textt" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>             
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                    </svg>                                
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <span class="{{$nothing = false}}"></span>
                                @foreach (Auth::user()->notifications()->get() as $notification)
                                    
                                    @if ($notification->checked == 'unchecked')
                                        <a class="dropdown-item nav-textt {{$nothing = false}}" href="/notification/uncheck/{{$notification->id}}">
                                            {{$notification->content}}
                                        </a>
                                    @else
                                        <span class="{{$nothing = true}}"></span>
                                    @endif
                                @endforeach
                                @if ($nothing == true)
                                    <a class="dropdown-item nav-textt" href="/notification/log">
                                        Keine neuen Nachrichten
                                    </a>
                                @endif
                                </div>
                            </li>
                    </ul>
                    
                    <?php
                
                    $uPermissions = Auth::user()->permissions()->get();
                    $isTeacher = false;
                    


                    if(!Auth::user()->permissions()->exists()){
                
                        Auth::user()->permissions()->create([
                            'permission' => 'Schüler'
                        ]);
                    }
                    
                    foreach ($uPermissions as $p) {
                        if($p->permission == "Lehrer"){
                            $isTeacher = true;
                        }
                    }
                    
                    ?>
                    @if(Auth::user()->subject == null && Auth::user()->subject == 'unset' && $isTeacher != true)
                        <p>Software lädt</p>
                        <script>window.location = "/me/update";</script>
                    @endif
                    @endauth
                </div>
            </div>
        </nav>


        <main class="py-4">

            
            @yield('content')
        </main>
    </div>
    <script>
        window.transitionToPage = function(href) {
        document.querySelector('body').style.opacity = 0
        setTimeout(function() { 
            window.location.href = href
        }, 500)
    }

    document.addEventListener('DOMContentLoaded', function(event) {
        document.querySelector('body').style.opacity = 1
    })
    </script>
</body>
</html>
