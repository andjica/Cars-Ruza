@extends('template.layout')
@section('content')
<div class="container">
    <div class="row" style="margin-top:100px;">
    <div class="col-md-3 bg-dark rounded">
    @include('components.sidebar')
    </div>
    <div class="col-md-9">
    <div class="card border-warning">
    <div class="card-header bg-dark text-white">Your current cars on DealNl webiste</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Car category</th>
      <th scope="col">Name of car</th>
      <th scope="col">Motor type</th>
      <th scope="col">Motor type 2</th>
      <th scope="col">Shift type</th>
      <th scope="col">Image</th>
      <th scope="col">Cost</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="clas">
      @foreach ($all_cars as $car)
    <tr class="class" id="{{$car->id}}">
      <input type="hidden" value="{{$car->id}}">
      <th scope="row" class="tr">{{$car->id}}</th>
      <td>{{$car->category->name}}</td>
      <td>{{$car->car}}</td>
      <td>{{$car->motor->benzine}}</td>
      <td>{{$car->motor->type}}</td>
      <td>{{$car->motor->gearshift}}</td>
      <td><img src="{{asset('/img/'.$car->image)}}" style="width:150px; height:100px;"></td>
      <td id="cost{{$car->id}}">{{$car->cost}} &euro; </td>
      <td>
          <form action="{{asset('/cars/'.$car->id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-basic"> 
                <i class="fas fa-minus-circle fa-2x text-danger" data-toggle="tooltip" data-placement="top" title="Delete this car"></i>
            </button>
          </form>
          
        <a href="{{asset('cars/'.$car->id.'/edit')}}"><i class="fas fa-edit fa-2x" data-toggle="tooltip" data-placement="top" title="Edit this car"></i></a>
        <form action="{{asset('/update-cost/'.$car->id)}}" method="post">
          {{csrf_field()}}
        <input type="text" class="discount{{$car->id}}" id="discount" name="discount" placeholder="Discount"/>
        <input type="submit" value="Update cost">
      </form>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    </div>
  </div>
</div>
<script src="{{asset('js/discount.js')}}"></script>
@endsection


      