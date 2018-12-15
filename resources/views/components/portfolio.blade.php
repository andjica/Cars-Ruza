<!--portfolio-->
<section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Hieronder ziet u de auto categorien</h3>
          <h2 class="mb-5">Kies uw gewenste categorie</h2>
        </div>
        <div class="row no-gutters">

          @foreach($categories as $category)


          <div class="col-lg-6">
          <a class="portfolio-item category" id="{{ $category->id }}" href="{{asset('filter')}}">
              <span class="caption">
                <span class="caption-content">
                  <h2>{{$category->name}}</h2>
                  <p class="mb-0">{{$category->title}}</p>
                </span>
              </span>
              <img class="img-fluid" style="height: 300px; margin-left:60px;" src="{{$category->src}}" alt="">
            </a>
          </div>

          @endforeach
          {{-- <div class="col-lg-6">
            <a class="portfolio-item" href="{{asset('/opel')}}">
              <span class="caption">
                <span class="caption-content">
                  <h2>Opel</h2>
                  <p class="mb-0">Vind snel hier uw gewenste Opel</p>
                </span>
              </span>
              <img class="img-fluid" style="height: 300px; margin-left:60px;" src="img/opel.png" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="{{asset('/hyundai')}}">
              <span class="caption">
                <span class="caption-content">
                  <h2>Hyundai</h2>
                  <p class="mb-0">Vind snel hier uw gewenste Hyundai</p>
                </span>
              </span>
              <img class="img-fluid" style="height: 300px; margin-left:0px; " src="img/hun.png" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="{{asset('/kiaoption')}}">
              <span class="caption">
                <span class="caption-content">
                  <h2>Kia</h2>
                  <p class="mb-0">Vind snel hier uw gewenste Kia</p>
                </span>
              </span>
              <img class="img-fluid" style="height: 300px; margin-left:80px;" src="img/kiaa.jpg" alt="">
            </a>
          </div> --}}
        </div>
      </div>
      
    </section>
    <script>
          $('.category').on('click',function(){
            var id = this.id;
            localStorage.setItem('category_id', id);
  
        });
      </script>