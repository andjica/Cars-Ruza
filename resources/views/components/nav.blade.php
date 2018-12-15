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
              <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{route('cars.index')}}">{{auth()->user()->name}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('cars/create')}}"> Create Ad </a>
            </li>

            @else

            <li class="nav-item">
              <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/singup')}}">Sign Up</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" style="color:#f6bf22; font-weight:900; font-size:20px;" href="{{asset('/login')}}">Log in</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>