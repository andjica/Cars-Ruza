
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
    <div class="djoka3" style="height: 50px; padding-top:10px;   width: 50px; background-color: #ff6200; float:left; border-radius:50%;">
    <p>3</p>
    </div>
    <div class="djoka4" style="height: 50px; padding-top:10px;  border:solid #ff6200; width: 50px; background-color: white; float:left; border-radius:50%;">
        <p>4</p>
    </div>
    </div>
</center>
    </div>

 

<div class="container">
    <div class="row my-4 border rounded">
        
   


    <div class="col-lg-4 my-4" style="">
    <img src="{{asset('/')}}img/deco125.png" style="height:170px;" class="img-fluid float-right">
</div>
    <div class="col-lg-8 my-4" style="">
  
    
        @foreach($colors as $color)
    
            <a href="{{asset('/sorted_cars')}}" class="color" id={{$color->id}}><img src="{{$color->color}}" style="width: 70px;  height:70px; border-radius:50%;" alt="..." class="img-thumbnail m-1"></a>

        @endforeach

            
                
        </div>
    </div>
    
   
    </div>
</div>
    
<br>


<center>
<button type="button" class="btn btn-outline-warning" style="width: 200px;">
<a href="{{asset('/sorted_cars')}}">
 Volgende</a></button>
</center>


<script>
        $(document).ready(function(){
            $('.color').on('click',function(){
                var id = this.id;
                localStorage.setItem('color',id);
                
          });
        });
      </script>