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
    <div class="djoka2" style="height: 50px; padding-top:10px; border:solid #ff6200; width: 50px; background-color: white; float:left; border-radius:50%;">
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
    
     
 
      
     
    {{--
      <div class="col-sm-3">
        <div class="card" style="border-radius:20px; border:solid orange;">
          <div class="card-body">
            <h5 class="card-title"style="text-align:center;" >Nieuwe modellen</h5>
            <Center><button type="button" value="Nieuwe modellen" class="btn btn-outline-warning model" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
            </button></center>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="border-radius:20px; border:solid #ff6200;">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center; color: #ff6200;">Nieuwe & Gebruikte modellen</h5>
            
            <center><button type="button" value="Nieuwe & Gebruikte modellen" class="btn btn-outline btn-dark model active" style" color:#ff6200;" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
          </button></center>
          </div>
        </div>
      </div> --}}
   
      <div class="container">
    <div class="row p-4 border rounded">
      <div class="col-lg-2">
      <img src="{{asset('/')}}img/deco123.png" style="height:170px; margin-left: -30px;" class="img-fluid float-right">
    </div>

    <div class="col-lg-10">
      <div class="row">
      <div class="col-sm-5" style="margin-top: 50px;">
        <div class="card" style="border-radius:20px; border:solid #ff6200;">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center; color: #ff6200;">Handmatige Transmissie</h5>
            <center><button type="button"  value="Handmatig" class="btn btn-outline btn-dark model active" style="color: #ff6200;" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
            </button></center>
          </div>
        </div>
      </div>
      <div class="col-sm-5" style="margin-top: 50px; ">
        <div class="card" style="border-radius:20px; border:solid  #ff6200;">
          <div class="card-body">
            <h5 class="card-title"style="text-align:center; color: #ff6200;">Automaat Transmissie</h5>
           <center> <button type="button" value="Automatisch" value="4" class="btn btn-outline btn-dark active model" style="color: #ff6200;" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
          </button>
          
          </center>
          </div>
          </div>
        </div>
      </div>
    </div>
      <br>
      
    </div>
    </div>
    <br>
    <br>
    <center>
        <a href="{{asset('/engine')}}">
          <button type="button" class="btn confirm-model text-white" style="width: 200px; background-color: #ff6200;">Volgende</button>
        </a>
    
    </center>
    <script>
      $(document).ready(function(){
        var models = [];
    
        $('.model').on('click',function(e){
          e.preventDefault();
    
          var id = $(this).val();
          
          if(models.includes(id))
          {
            models.splice(models.indexOf(id),1);
          }
          else{
            models.push(id);
          }
          console.log(models);
          $('.confirm-model').on('click',function(){
            localStorage.setItem('gearshift', models);
          });
        });
      });
    </script>
@endsection