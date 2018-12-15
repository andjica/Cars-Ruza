<div class="holder" style="margin-top: 150px;">
<Center>
<h4>Volg hier uw progressie, we zijn er bijna!</h4>
</center>
<div class="progress">
<div class="steptwo" style="margin: 0px; padding: 0px; background-color: orange; height: 100px; width: 60%;">
</div>
</div>
</div>

<Br>
<br>
<br>
<br>
<Center>
<h3> Kies uw Bekleding </h3>
</center>
<div class="container">
<div class="row">
  <div class="col-sm-12">
  <h4>Sport Classe</h4>
  <p> The Sport is the next trim level up from the base model. As standard it gets 17-inch alloy wheels, sport suspension, sports seats, climate control and a chromed twin exhaust. Includes sat-nav.  </p>
    
    @foreach($class as $c)
    <div class="card" style=" border:solid orange ; border-radius:20px;">
      <div class="card-body">
        <h2 class="card-title" id="cartype" >{{$c->class}}</h2>
        
        <button type="button" id="{{$c->id}}" class="btn btn-outline-warning upholstery" style="float:right; margin-top: -30px; " data-toggle="button" aria-pressed="false" autocomplete="off">
        Selecteer
        </button>
        <i class="fas fa-euro-sign" style="float:right; margin-right:20px; margin-top: -30px; font-size: 25px;"> {{$c->cost}}</i>
      </div>
    </div>
    @endforeach

  </div>


{{-- 
  <div class="col-sm-12" style="margin-top: 20px;">
    <div class="card" style=" border:solid orange ; border-radius:20px;">
      <div class="card-body">
        <h2 class="card-title" id="cartype" >Sport Tech Pack</h2>
        <button type="button" class="btn btn-outline-warning" style="float:right; margin-top: -30px; " data-toggle="button" aria-pressed="false" autocomplete="off">
        Selecteer
        </button>
        <i class="fas fa-euro-sign" style="float:right; margin-right:20px; margin-top: -30px;  font-size: 25px;"> 18.000</i>
        
    
        

        
      </div>
    </div>
  </div>


<div class="col-sm-12" style="margin-top:50px;">
  <h4>S Line Classe</h4>
  <p> The Sport is the next trim level up from the base model. As standard it gets 17-inch alloy wheels, sport suspension, sports seats, climate control and a chromed twin exhaust. Includes sat-nav.  </p>
    <div class="card" style=" border:solid orange ; border-radius:20px;">
      <div class="card-body">
        <h2 class="card-title" id="cartype" >S Line Standard</h2>
        
        <button type="button" class="btn btn-outline-warning" style="float:right; margin-top: -30px; " data-toggle="button" aria-pressed="false" autocomplete="off">
        Selecteer
        </button>
        <i class="fas fa-euro-sign" style="float:right; margin-right:20px; margin-top: -30px; font-size: 25px;"> 18.000</i>
      </div>
    </div>
  </div>



  <div class="col-sm-12" style="margin-top: 20px;">
    <div class="card" style=" border:solid orange ; border-radius:20px;">
      <div class="card-body">
        <h2 class="card-title" id="cartype" >S Line Tech Pack</h2>
        <button type="button" class="btn btn-outline-warning" style="float:right; margin-top: -30px; " data-toggle="button" aria-pressed="false" autocomplete="off">
        Selecteer
        </button>
        <i class="fas fa-euro-sign" style="float:right; margin-right:20px; margin-top: -30px;  font-size: 25px;"> 18.000</i>
        
    
        

        
      </div>
    </div>
  </div> --}}

</div>
</div>
<Br>
<center>
    <a href="{{asset('/picker')}}">
      <button type="button" id="confirm-upholstery" class="btn btn-outline-warning" style="width: 200px;">Volgende</button>
    </a>
</center>
<script>
  $(document).ready(function(){
    var upholstery = [];

    $('.upholstery').on('click',function(e){
      e.preventDefault();

      var id = this.id;

      if(upholstery.includes(id))
      {
        upholstery.splice(upholstery.indexOf(id),1);
      }
      else{
        upholstery.push(id);
      }
      console.log(upholstery);
      $('#confirm-upholstery').on('click',function(){
        localStorage.setItem('upholstery', upholstery);
      });
    });
  });
</script>
