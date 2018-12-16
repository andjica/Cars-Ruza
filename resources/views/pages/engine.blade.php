@extends('template.layout')
@section('content')
<div class="maimun" style="margin-top: 150px;">
    <Center>
    <h4>Volg hier uw progressie</h4>
    </center>
    <center>
    <div class="kurac" style="display:inline-block;">
      <div class="djoka1" style="height: 50px; padding-top:10px; width: 50px; background-color: #ff6200; float:left; border-radius:50%;">
        <p>1</p>
    </div>
    <div class="djoka2" style="height: 50px; padding-top:10px;  width: 50px; background-color: #ff6200; float:left; border-radius:50%;">
    <p>2</p>
    </div>
    <div class="djoka3" style="height: 50px; padding-top:10px;  border:solid #ff6200; width: 50px; background-color: white; float:left; border-radius:50%;">
    <p>3</p>
    </div>
    <div class="djoka4" style="height: 50px; padding-top:10px;  border:solid #ff6200; width: 50px; background-color: white; float:left; border-radius:50%;">
        <p>4</p>
    </div>
    </div>
</center>
    </div>
    
    <Br>
    <br>
    <br>
    <br>
    <Center>
    <h3> Kies uw Motor Type</h3>
    </center>
    <div class="container">
    <div class="row border rounded p-4">
{{--     
      @foreach($motors as $motor)
      <div class="col-sm-12">
        <div class="card" style="border: solid orange; border-radius:20px;">
          <div class="card-body">
            <h5 class="card-title" id="cartype" >Engine type</h5>
            <i class="fas fa-gas-pump" id="carfuel"> {{$motor->type}}</i>  
            <i class="fas fa-cogs" id="transmission" style="margin-left: 10px;"> {{$motor->gearshift}}</i>
            <button type="button" id="{{$motor->id}}" class="btn btn-outline-warning motors" style="float:right; margin-top:-5px;" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
            </button>
            <i class="fas fa-euro-sign" style="float:right; margin-right:20px; font-size: 25px;"> {{$motor->cost}}</i>
          </div>
        </div>
      </div>
      @endforeach --}}
      <br>
      <div class="col-lg-3">
      <img src="{{asset('/')}}img/deco124.png" style=" width: 170px; " class="img-fluid float-right">
      </div>
      <div class="col-lg-9 my-4">
      <select name="benzine" id="benzine" class="custom-select d-block w-100 m-4">
        <option value="Benzine">Benzine</option>
        <option value="Diesel">Diesel</option>
        <option value="Hybrid benzine">Hybrid benzine</option>
        <option value="Hybride diesel">Hybride diesel</option>
        <option value="Elektriesch">Elektriesch</option>
      </select>
      <select name="type" id="type" class="custom-select d-block w-100 m-4">
        <option value="1.4">1.4</option>
        <option value="1.6">1.6</option>
        <option value="1.8">1.8</option>
        <option value="2.0">2.0</option>
      </select>
    </div>
    </div>
</div>
    <center>
      <a href="{{asset('/picker')}}">
        <button type="button" id="confirm-motor" class="btn btn-outline" style="width: 200px; background-color:#ff6200; margin-top:20px;">Volgende</button>
      </a>
    </center>
    <script>
      $(document).ready(function(){

        $('#confirm-motor').on('click',function(){

          var benzine = $('#benzine').val();
          var type = $('#type').val();
          // if(motors.includes(id))
          // {
          //   motors.splice(motors.indexOf(id),1);
          // }
          // else{
          //   motors.push(id);
          // }
          localStorage.setItem('benzine', benzine);
          localStorage.setItem('type', type);

        });
      });
    </script>
@endsection