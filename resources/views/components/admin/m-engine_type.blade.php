
<div class="container">
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
        <h2 class="text-info">Manage Engine type</h2>
        
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Set price for your engine type</span>
            <i class="fas fa-euro-sign text-success fa-2x"></i>
          </h4>
          <ul class="list-group mb-3">
		  <li class="list-group-item d-flex justify-content-between lh-condensed">
            
			Your engine type<br>
             <ul class="list-inline">
				  <li class="list-inline-item"><div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="benzine">
					  <label class="custom-control-label" for="benzine">Benzine</label>
					</div>
					</li>
				  <li class="list-inline-item">
					<div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="dizel">
					  <label class="custom-control-label" for="dizel">Dizel</label>
					</div>
				  </li>
				   <li class="list-inline-item">
					<div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="hybrid">
					  <label class="custom-control-label" for="hybrid">Hybrid</label>
					</div>
				  </li>
				   <li class="list-inline-item">
					<div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="electrict">
					  <label class="custom-control-label" for="electrict">Electrict</label>
					</div>
				  </li>
				</ul>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <i class="fas fa-gas-pump fa-2x text-dark"></i> &nbsp; Benzine
              <br>
				<input type="text" class="form-control" id="price" placeholder="Add Price for Benzine">
              </div>
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <i class="fas fa-gas-pump fa-2x text-warning"></i> &nbsp; Dizel
				<br>
				<input type="text" class="form-control" id="price" placeholder="Add Price for dizel">
              </div>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <i class="fas fa-gas-pump text-warning fa-2x">/<i class="fas fa-plug text-secondary "></i></i> &nbsp; Hybrid
				<br>
				<input type="text" class="form-control" id="price" placeholder="Add Price for Hybrid">
              </div>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <i class="fas fa-plug fa-2x text-secondary"></i> &nbsp; Electrict
				<br>
				<input type="text" class="form-control" id="price" placeholder="Add Price for Electrict">
              </div>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>

			  	 <a href="{{asset('/admin')}}" class="btn btn-primary mb-2"><i class="fas fa-arrow-left"></i>back</a>
				 <button type="submit" class="btn btn-primary mb-2">Submit</button>
              </div>
			</li>
			</li>
         
     </div>
    
    </div>
    
</div>

</div>