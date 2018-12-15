
<div class="holder" style="margin-top: 120px;">
<Center>
<h4>Nu nog alleen uw gewenste kleur kiezen!</h4>
</center>
<br>
<div class="progress">
<div class="steptwo" style="margin: 0px; padding: 0px; background-color: orange; height: 100px; width:80%;">
</div>
</div>
</div>

 

<div class="container">
<div class="main-area" style="padding-left:80px;">
<div class="col-lg-12">
    <div class="row" style="margin-top:80px;">
    
    @foreach($colors as $color)
        <a href="{{asset('/sorted_cars')}}" class="color" id={{$color->id}}><img src="{{$color->color}}" style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
    @endforeach

   {{-- <a href="{{asset('/offerte')}}"><img src="img/luna.jpg" style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/rubie.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/grey.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/silver.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/lagoon.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/venred.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/green.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/gold.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/magic.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/velvet.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/blue1.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/zwart.png"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a>
   <a href="{{asset('/offerte')}}"><img src="img/blue1.jpg"  style="width: 225px; height:225px; border-radius:50%;" alt="..." class="img-thumbnail"></a> --}}
      
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