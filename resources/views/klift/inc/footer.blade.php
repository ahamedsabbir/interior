<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">{{ APP\Models\Settings::find(1)->name }}</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="{{ APP\Models\Settings::find(1)->twitter }}"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="{{ APP\Models\Settings::find(1)->facebook }}"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="{{ APP\Models\Settings::find(1)->instagram }}"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
			  <img src="{{ asset('/klift/uploads/'.APP\Models\Settings::find(1)->icon) }}" style="width:250px;"/>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
				@foreach($category as $category_key => $category_value)
                <li><a>{{ $category_value->name }}</a></li>
				@endforeach
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{ APP\Models\Settings::find(1)->address }}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ APP\Models\Settings::find(1)->mobile }}</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ APP\Models\Settings::find(1)->email }}</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
			{{ APP\Models\Settings::find(1)->copyright }}
          </div>
        </div>
      </div>
    </footer>