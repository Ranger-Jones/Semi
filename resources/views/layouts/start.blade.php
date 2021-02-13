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
    <script src="{{ asset('js/buttons.js') }}" defer></script>
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/schoollife.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notification.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/example-table.css') }}" rel="stylesheet">

    <link href="{{ asset('css/schoolnews.css') }}" rel="stylesheet">
    <link href="{{ asset('css/startpage.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>  
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md nav-sci">
            <div class="container myDIV">
                <a class="navbar-brand d-flex nav-link" href="{{ url('/vbg') }}">
                    <div class="">
                        <img src="/img/logo.png" alt="" style="max-height: 45px; border-right: 1px solid #333" class="pr-3"></div>
                    <div class="pl-3 pt-1 nav-textt-b">
                        von-Bülows Odysee
                    </div>
</a>

    
                </div>
            </div>
        </nav>
        @auth 
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
                    //dd($isTeacher);
                    
                    if($isTeacher){
                        echo '<script>window.location = "/";</script>';
                    }

                    ?>
        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
