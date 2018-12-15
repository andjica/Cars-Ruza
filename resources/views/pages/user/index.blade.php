@extends('template.layout')

@section('content')
    <h1>PROFILE</h1>
    <h1>PROFILE</h1>
    <h1>PROFILE</h1>

    @foreach($user->cars as $car)
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-80">
          <a href="{{asset('/cars/'.$car->id)}}"><img class="card-img-top" src="{{asset('/img/'.$car->image)}}" style="height: 245px;" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{asset('/filter')}}">{{$car->car}}</a>
            </h4>
            <p class="card-text">
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc1}}<br>
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc2}}<Br>
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc3}}<BR>
            <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> {{$car->desc4}}</p>
            <a href="{{asset('')}}">Delete</a>
          </div>
        </div>
      </div>
      @endforeach
     
@endsection