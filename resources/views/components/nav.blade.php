<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top bg-white nav-border" style="height:80px;">

      <div class="container">
        <a class="img-fluid" href="{{asset('/')}}" > <img src="img/logo12.png" style="height: 60px;"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             
        <li class="nav-item">
          <a class="nav-link linkovi" style="color:#FF6200" href="{{asset('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link linkovi" style="color:#FF6200" href="{{asset('/about')}}">Over DealNL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link linkovi" style="color:#FF6200" href="{{asset('/contact')}}">Contact </a>
        </li>

            @if(auth()->user())

            <li class="nav-item">
              <a class="nav-link linkovi" style="color:#FF6200" href="{{asset('/logout')}}">Log out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link linkovi" style="color:#FF6200" href="{{route('cars.index')}}">{{auth()->user()->name}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link linkovi" style="color:#FF6200;" href="{{asset('cars/create')}}"> Create Ad </a>
            </li>

            @else

            <li class="nav-item">
              <a class="nav-link linkovi" style="color:#FF6200;" href="{{asset('/register')}}">Sign Up</a>
            </li>

            <li class="nav-item">
              <a class="nav-link linkovi" style="color:#FF6200;" href="{{asset('/login')}}">Log in</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    
    </nav>

   