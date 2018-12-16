<div class="container">
<div class="row my-4 border p-2 m-2">


      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your car price</span>
            <i class="fas fa-euro-sign text-success fa-2x"></i>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
				Make price for your car
              
				<br>
				<input type="text" class="form-control" id="price" placeholder="Price">
              </div>
              <span class="text-muted">$12</span>
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
				Make discount
              
				<br>
				<input type="text" class="form-control" id="discount" placeholder="Discount">
              </div>
              <span class="text-muted">$12</span>
            </li>
 
            <li class="list-group-item d-flex justify-content-between text-success bg-light">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>
			<hr>
			<h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Make description of car</span>
            <i class="fas fa-pencil-alt fa-2x text-success"></i>
          </h4>
			 <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed bg-light">
              <div>
				Content for your car
				<input type="text" class="form-control" id="content1" placeholder="Content 1">
              </div>
             
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
				Content 2
              
				<br>
				<input type="text" class="form-control" id="content2" placeholder="Content 2">
              </div>
           
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
				Content 3
              
				<br>
				<input type="text" class="form-control" id="content3" placeholder="Content 3">
              </div>
             
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
				Content 4
              
				<br>
				<input type="text" class="form-control" id="content4" placeholder="Content 4">
              </div>
             
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1 border-right">
          <h3 class="mb-3 text-secondary"><i class="fas fa-car fa-2x text-warning"></i>Add car</h3>
          <form class="needs-validation" novalidate>
            <div class="row my-4 p-3">
			<h4>Choose your car you want ad to your dashboard</h4>
              <div class="col-md-4 mb-3">
                <label for="state">Car</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose..</option>
                  <option>Audi</option>
				  <option>BMW</option>
				  <option>Citroen</option>
				  <option>Dacia</option>
				  <option>Fiat</option>
				  <option>Ford</option>
				  <option>Honda</option>
				  <option>Hyndai</option>
				  <option>Jaguar</option>
				  <option>Mazda</option>
				  <option>Mercedes</option>
				  <option>MINI</option>
                </select>
                <div class="invalid-feedback">
                  Please provide your car.
                </div>
              </div>
               <div class="col-md-4 mb-3">
                <label for="state">Model</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose..</option>
                  <option>A3</option>
				  <option>A4</option>
				  <option>A5</option>
				  <option>A6</option>
				  <option>A7</option>
				  <option>A8</option>
				  <option>Q2</option>
				  <option>Q3</option>
				  <option>Q5</option>
				
				 
                </select>
                <div class="invalid-feedback">
                  Please provide your car.
                </div>
              </div>
            </div>
			<hr>
			<div class="mb-3 p-3">
			<h4 class="text-dark">Select one or two transmision</h4>
			<button type="button" value="Handmatig" class="btn btn-lg btn-outline-warning model active mr-5 text-dark" data-toggle="button" aria-pressed="true" autocomplete="off">
						Automatic
				</button>
				<button type="button" value="Handmatig" class="btn btn-lg btn-outline-warning model active text-dark" data-toggle="button" aria-pressed="true" autocomplete="off">
						Handmatig
				</button>
			</div>
			<div class="row p-3">
			<div class="col-md-4 mb-3">
            <div class="mb-3">
			<hr>
			<h4 class="text-dark">Check motor types</h4>
             <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Motor types of <b>1.4</b></label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Motor types of <b>1.6</b></label>
            </div>
			 <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-a">
              <label class="custom-control-label" for="same-a">Motor types of <b>1.8</b></label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save">
              <label class="custom-control-label" for="save">Motor types of <b>2.0</b></label>
            </div>
            </div>
			</div>
			<div class="col-md-4 mb-3 ml-3">
            <div class="mb-3">
			<hr>
			<h4 class="text-dark">Check car packeten</h4>
            
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="comf">
              <label class="custom-control-label" for="comf">Comfort </label>
            </div>
			 <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="lux">
              <label class="custom-control-label" for="lux">Luxury </label>
            </div>
			 <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="sp">
              <label class="custom-control-label" for="sp">Sport +</label>
            </div>
			 <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="ss">
              <label class="custom-control-label" for="ss">Supper Sport</label>
            </div>
            </div>
			</div>
			</div>
            <hr>
					<div class="mb-3 p-3">
			<h4 class="text-dark"><i class="fas fa-gas-pump fa-2x text-dark"></i>&nbsp;Select types of engine <i class="fas fa-plug fa-2x text-secondary"></i></h4>
			<button type="button" value="Handmatig" class="my-4 btn btn-lg btn-outline-warning model active mr-3 text-dark" data-toggle="button" aria-pressed="true" autocomplete="off">
						Benzin
				</button>
				<button type="button" value="Handmatig" class="btn btn-lg btn-outline-warning model active text-dark" data-toggle="button" aria-pressed="true" autocomplete="off">
						Dizel
				</button> &nbsp; &nbsp; 
				<button type="button" value="Handmatig" class="btn btn-lg btn-outline-warning model active mr-3 text-dark" data-toggle="button" aria-pressed="true" autocomplete="off">
						Electrict
				</button>
				<button type="button" value="Handmatig" class="btn btn-lg btn-outline-warning model active text-dark" data-toggle="button" aria-pressed="true" autocomplete="off">
						Hybrid
				</button>
			</div>
			
            <div class="row mt-3">
			
					<div class="col-md-8  mb-3 ml-3 rounded border bg-dark text-white">
					<h4 class="text-white"><i class="fas fa-battery-quarter fa-2x text-white"></i> &nbsp; Select power </h4>
					<div class="mb-3">
					
					<div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="80pk">
					  <label class="custom-control-label" for="80pk">80-140 pk</label>
					</div>
					 <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="200pk">
					  <label class="custom-control-label" for="200pk">140-200 pk</label>
					</div>
					 <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="250pk">
					  <label class="custom-control-label" for="250pk">200-250 pk</label>
					</div>
					</div>
					</div>
	
            </div>
			<hr>
			<div class="row">
			<div class="col-md-7 ml-3 border-right bg-warning rounded">
            <div class="mb-3 my-4">
            <h3 class="text-dark"><i class="fas fa-palette text-white fa-2x"></i>Add colors for car</h3>
            <p class="mb-3 text-white">Choose one or more colors  </p><br>
                <a href="{{asset('/offerte')}}"><img src="img/luna.jpg" alt="..." class="img-thumbnail color-picker"></a>
                <a href="{{asset('/offerte')}}"><img src="img/rubie.jpg"  alt="..." class="img-thumbnail color-picker"></a>
                <a href="{{asset('/offerte')}}"><img src="img/grey.jpg"   alt="..." class="img-thumbnail color-picker"></a>
                <a href="{{asset('/offerte')}}"><img src="img/silver.jpg"   alt="..." class="img-thumbnail color-picker"></a>
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
			</div>
			<div class="col-md-4 my-4">
			<h3 class="text-warning"><i class="fas fa-fill-drip fa-2x text-info"></i>Shine of your car</h3>
            <p class="mb-3">Choose one 
			<div class="custom-control custom-radio">
			  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
			  <label class="custom-control-label" for="customRadio1">Yes</label>
			</div>
			<div class="custom-control custom-radio">
			  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
			  <label class="custom-control-label" for="customRadio2">No</label>
			</div>
			</div>
			</div>
			<hr>
	
            
			<hr>
			<div class="row p-3">
			
				<div class="col-md-4">
					<h3 class="text-warning"><i class="fas fa-map-marker-alt fa-2x text-success"></i>Navigation</h3>
					<p class="mb-3">Choose one 
					<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio1">Yes</label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio2">No</label>
					</div>
					</div>
					<div class="col-md-8 mb-3 my-2">
					<h4 class="text-dark"><i class="fas fa-cog fa-2x text-danger"></i>Select type of tires</h4>
					<div class="row">
					<div class="col-md-4 mb-3 ml-3">
						<div class="mb-3">
						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="16">
						  <label class="custom-control-label" for="16">16</label>
						</div>
						 <div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="17">
						  <label class="custom-control-label" for="17">17</label>
						</div>
						 <div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="18">
						  <label class="custom-control-label" for="18">18</label>
						</div>
						 <div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="19">
						  <label class="custom-control-label" for="19">19</label>
						</div>
						</div>
						</div>
						<div class="col-md-4 mb-3 ml-3">
						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="20">
						  <label class="custom-control-label" for="20">20</label>
						</div>
						 <div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="21">
						  <label class="custom-control-label" for="21">21</label>
						</div>
						 <div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="22">
						  <label class="custom-control-label" for="22">22</label>
						</div>
						 <div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="23">
						  <label class="custom-control-label" for="23">23</label>
						</div>
					</div>
						</div>
					</div>
					
				</div>
			
				<hr>
				<div class="row p-3">
					
					<div class="col-md-4 mb-3 ">
					<h4 class="text-dark">Select your enterier</h4>
					<div class="mb-3">
					
					<div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="leder">
					  <label class="custom-control-label" for="leder">Leder</label>
					</div>
					 <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="coton">
					  <label class="custom-control-label" for="coton">Coton</label>
					</div>
					 <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="sport">
					  <label class="custom-control-label" for="sport">Sport</label>
					</div>
					 <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="luxury2">
					  <label class="custom-control-label" for="luxury2">Luxury</label>
					</div>
					</div>
					</div>
					
					<div class="col-md-5">
					<h4 class="text-dark">Select caro session </h4>
					<div class="mb-3">
					
					<div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="has">
					  <label class="custom-control-label" for="has">Hatsback</label>
					</div>
					 <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="lim">
					  <label class="custom-control-label" for="lim">Limuzine</label>
					</div>
					 <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="crv">
					  <label class="custom-control-label" for="crv">Caravan</label>
					</div>
					<div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" id="suw">
					  <label class="custom-control-label" for="suw">Suw</label>
					</div>
					</div>
					</div>
				</div>
					<button type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
			</div>
         
			

			
        </div>
</div>
</div>