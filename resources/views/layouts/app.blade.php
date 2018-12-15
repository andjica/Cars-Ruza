<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
 

            <!-- Custom Fonts -->
            <link href="{{asset('/')}}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
            <link href="{{asset('/')}}vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="{{asset('/')}}css/stylish-portfolio.min.css" rel="stylesheet">

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

            <script src="{{asset('js/sorted_cars.js')}}"></script>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
    

        <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top bg-dark" style="height:80px;">

            <div class="container">
            <a class="img-fluid" href="{{asset('/')}}" > <img src="img/logo2.png"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                
            <li class="nav-item">
                <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/about')}}">Over DealNL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/contact')}}">Contact Us</a>
            </li>

                @if(auth()->user())

                <li class="nav-item">
                    <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/logout')}}">Log out</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{route('user.index')}}">{{auth()->user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('cars/create')}}"> Create Ad </a>
                </li>

                @else

                <li class="nav-item">
                    <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/register')}}">Sign Up</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/login')}}">Log in</a>
                </li>
                @endif
                
                </ul>
            </div>
            </div>
            </nav>
     
                @yield('content')
                </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>