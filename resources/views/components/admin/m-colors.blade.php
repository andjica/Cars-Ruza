
<div class="container mb-5">


<div class="row my-4 border p-2 m-2">
    <div class="col-md-3">
    <div class="card">
    <div class="card-header"></div>
        <img src="{{asset('/')}}img/i30w.png" style="width:200px;" class="img-fluid"/>
        </div>
    </div>
	
    <div class="col-md-5">
          <h2 class="text-info">Hyndai</h2>
          <h3 class="text-secondary">
          Specifications
             </h3>
             <p> Model: <b>i30w</b></p>
          <ul>
            <li>
              <strong>Price - 20000 -</strong><br>
              
            </li>
            <li>
            <strong>Discount - 5% </strong>
            </li>
            <li>Colors: <b>red, black, white</b></li>
            <li>Motor type: <b>benzin, dizel</b></li>
            <li>Motor type 2: 1.4, 1.8</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
    </div>
	<div class="col-md-4">
        
        <i class="fas fa-palette text-warning fa-4x"></i>
		Your current colors:<br><br>
		<a href="{{asset('/offerte')}}"><img src="img/luna.jpg" alt="..." class="img-thumbnail color-picker"></a>
        <a href="{{asset('/offerte')}}"><img src="img/rubie.jpg"  alt="..." class="img-thumbnail color-picker"></a>
        <a href="{{asset('/offerte')}}"><img src="img/grey.jpg"   alt="..." class="img-thumbnail color-picker"></a>
        <a href="{{asset('/offerte')}}"><img src="img/silver.jpg"   alt="..." class="img-thumbnail color-picker"></a>
		<br>
		<br>
		<!--Popup for choosing colors -->
		<a href="{{asset('/admin')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>back</a>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			   <i class="fas fa-plus-circle"></i>Add new colors
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Check colors</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<a href="{{asset('/offerte')}}"><img src="img/lagoon.jpg"   alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/venred.jpg"   alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/green.jpg" alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/gold.jpg" alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/magic.jpg" alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/velvet.jpg" alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/blue1.jpg"  alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/zwart.png" alt="..." class="img-thumbnail color-picker"></a>
					<a href="{{asset('/offerte')}}"><img src="img/blue1.jpg" alt="..." class="img-thumbnail color-picker"></a> 
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				  </div>
				</div>
			  </div>
			</div>
         
     </div>
    
    </div>
	<div class="row mb-2">
			<div class="col-md-11 ml-3 border-right bg-warning rounded">
            <div class="mb-3 my-4">
            <h3 class="text-dark"><i class="fas fa-palette text-white fa-2x"></i>Add price for colors</h3>
			<br>
			
			<ul class="list-inline">
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}"><img src="img/luna.jpg" alt="..." class="img-thumbnail color-picker"></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for luna color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/rubie.jpg"  alt="..." class="img-thumbnail color-picker"></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for rubie color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
	
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}"><img src="img/grey.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for grey</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/silver.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for silver color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/lagoon.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for lagoon color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			   <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/venred.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for venred color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			   <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/green.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for green color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/gold.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for gold color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
				<li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/gold.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for gold color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/magic.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for magic color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			   <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/velvet.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for velvet color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/blue1.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for blue1 color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			  <li class="list-inline-item text-center"> <a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><a href="{{asset('/offerte')}}">  <a href="{{asset('/offerte')}}"><img src="img/velvet.jpg"   alt="..." class="img-thumbnail color-picker"></a></a></a></a>
			  <div class="form-group">
					<label for="exampleFormControlInput1">Set price for zwart color</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="set price">
				  </div>
			  </li>
			 <button type="button" class="btn btn-secondary btn-lg btn-block">Submit</button>
			</ul>

              
            </div>
			</div>
	
			</div>
    
</div>

