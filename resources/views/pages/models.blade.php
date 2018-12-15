@extends('template.layout')

@section('content')
    
<div class="holder" style="margin-top: 150px;">
    <Center>
    <h4>Volg hier uw progressie</h4>
    </center>
    <div class="progress">
    <div class="firststep" style="margin: 0px; padding: 0px; background-color: orange; height: 100px; width: 20%;">
    </div>
    </div>
    </div>
    <Br>
    <br>
    <br>
    <br>
    
{{--     
    
    <div class="container">
    <div class="row">
    
      <div class="col-sm-6">
        <div class="card" style="border-radius:20px; border:solid orange;">
          <div class="card-body">
            <h5 class="card-title"style="text-align:center;" >Nieuwe modellen</h5>
            <Center><button type="button" value="Nieuwe modellen" class="btn btn-outline-warning model" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
            </button></center>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card" style="border-radius:20px; border:solid orange;">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Nieuwe & Gebruikte modellen</h5>
            
            <center><button type="button" value="Nieuwe & Gebruikte modellen" class="btn btn-outline-warning model" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
          </button></center>
          </div>
        </div>
      </div> --}}
    
      <div class="col-sm-6" style="margin-top: 50px;">
        <div class="card" style="border-radius:20px; border:solid orange;">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Handmatige Transmissie</h5>
            <center><button type="button"  value="Handmatig" class="btn btn-outline-warning model" data-toggle="button" aria-pressed="false" autocomplete="off">
            Selecteer
    </button></center>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 50px; ">
        <div class="card" style="border-radius:20px; border:solid orange;">
          <div class="card-body">
            <h5 class="card-title"style="text-align:center;">Automaat Transmissie</h5>
           <center> <button type="button" value="Automatisch" value="4" class="btn btn-outline-warning model" data-toggle="button" aria-pressed="false" autocomplete="off">
      Selecteer
    </button>
    
    </center>
    
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
          <button type="button" class="btn btn-outline-warning confirm-model" style="width: 200px;">Volgende</button>
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