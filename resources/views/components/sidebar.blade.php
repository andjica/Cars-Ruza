
<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Welcome to DEALNL Dashbooard</h5>
  <div class="card-body">
  Dealnl Dashbooard allows you to quickly set up your cars as well as modify them.
  </div>
</div>


<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Manage your cars</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="{{asset('/cars/create')}}">Add cars &nbsp; &nbsp;<i class="fas fa-plus-circle"></i></a>
          </li>
          <li>
            <a href="{{asset('/all_cars')}}">See your cars &nbsp; &nbsp;<i class="fas fa-car"></i></a>
          </li>
          <li>
            <a href="#">Delete cars</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        
          <img src="{{asset('/')}}img/logo2.png" class="img-fluid">
    
      </div>
    </div>
  </div>
</div>

<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">How your car will look like after the addition
</h5>
  <div class="card-body">
  <img src="{{asset('/')}}img/sample.png" class="img-fluid"/>
   
  </div>
</div>

