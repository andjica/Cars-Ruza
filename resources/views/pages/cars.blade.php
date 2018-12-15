@extends('template.layout')

@section('content')
<!-- Page Content -->

<div class="container">

    <!-- Page Heading --><Br>
    <center>
    <h1 class="my-4">
      <medium style="color:orange;">Kies uw gewenste {{$category->name}}</medium>
    </h1>
    
    </center>
    
    @foreach($category->cars as $car)
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-80">
          <a href="{{asset('/filter')}}"><img class="card-img-top" src="{{asset('/img/'.$car->image)}}" style="height: 245px;" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{asset('/filter')}}">{{$car->car}}</a>
            </h4>
            <p class="card-text">
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc1}}<br>
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc2}}<Br>
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc3}}<BR>
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc4}}</p>
          </div>
        </div>
      </div>
      @endforeach
     
            </div>
    </div>
    <a href="{{asset('/filter')}}">FILTER</a>
    <!-- /.row -->
    
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
    
    </div>
    <script>
    
    window.addEventListener('load',function(){
      console.log(localStorage.getItem('color'));
    
      var models = localStorage.getItem('models');
      var motors = localStorage.getItem('motors');
      var upholstery = localStorage.getItem('upholstery');
      var color = localStorage.getItem('color');
    
      $.ajax({
        url:'http://localhost/cars-laravel/public/opel',
        method:'GET',
        data:
        {
          models,
          motors,
          upholstery,
          color
        },
        success:function(response)
        {
        }
      })
    
    })
    </script>
@endsection

