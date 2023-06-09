@extends('klift/app')
@section('content')
<section class="home-slider owl-carousel d-sm-none d-md-block">
@foreach($slider as $slider_key => $slider_value)
  <div class="slider-item js-fullheight" style="background-image:url('{{ asset('/klift/uploads/'.$slider_value->icon) }}');">
    <div class="overlay"></div>
    <div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
		  <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
			<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $slider_value->name }}</h1>
			<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $slider_value->title }}</p>
			<p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3 d-none">View our works</a></p>
		  </div>
		</div>
    </div>
  </div>
@endforeach 
</section>

<section class="ftco-services bg-light d-none">
  <div class="container">
    <div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-idea"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Perfectly Design</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-compass-symbol"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Carefully Planned</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>    
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-layers"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Smartly Execute</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>


@foreach($about as $about_key => $about_value)
<section class="ftco-section ftc-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2" style="background-image: url('{{ asset('/klift/uploads/'.$about_value->icon) }}');">
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
          <div class="pl-md-5 ml-md-5">
            <span class="subheading">{{ $about_value->name }}</span>
            <h2 class="mb-4">{{ $about_value->title }}</h2>
          </div>
        </div>
        <div class="pl-md-5 ml-md-5 mb-5">
          {{ $about_value->description }}
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach


<section class="ftco-section ftco-counter">
  <div class="">
    <div class="row">
      <div class="col-md-12">
		<img src="{{ asset('/klift/uploads/'.APP\Models\Settings::find(1)->add_one) }}" style="width:100%;"/>
	  </div>
	</div>
  </div>
</section>



<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('klift/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row d-md-flex align-items-center justify-content-center">
      <div class="col-lg-4">
        <div class="heading-section pl-md-5 heading-section-white">
          <div class="pl-md-5 ml-md-5 ftco-animate">
            <span class="subheading">Some</span>
            <h2 class="mb-4">Interesting Facts</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-5 text-center">
              <div class="text">
                <strong class="number" data-number="5">0</strong>
                <span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="215">0</strong>
                <span>Happy Clients</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="228">0</strong>
                <span>Finished Projects</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Our Projects</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row no-gutters">
	@foreach($category as $category_key => $category_value)    
	  <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{ asset('/klift/uploads/'.$category_value->icon) }}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <h3>{{ $category_value->title }}</h3>
          </div>
          <a href="{{ asset('/klift/uploads/'.$category_value->icon) }}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class=""><small style="">Open</small></span>
          </a>
        </div>
		  <div class="text-center py-2" style="background-color:#FFCDCD;">
			<a style="color:white;" href="{{ url('gallery/category/'.$category_value->id) }}">{{ $category_value->title }}</a>
		  </div>
      </div>
	  @endforeach
    </div>
  </div>
</section>

<section class="ftco-section ftco-counter">
  <div class="">
    <div class="row">
      <div class="col-md-12">
		<img src="{{ asset('/klift/uploads/'.APP\Models\Settings::find(1)->add_two) }}" style="width:100%;"/>
	  </div>
	</div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Our satisfied customer says</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
		  @foreach($customer as $customer_key => $customer_value)
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image: url({{ asset('/klift/uploads/'.$customer_value->photo) }})">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5 pl-4 line">{{ $customer_value->description }}</p>
                <p class="name">{{ $customer_value->name }}</p>
                <span class="position">{{ $customer_value->title }}</span>
              </div>
            </div>
          </div>
		  @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
  
<section class="ftco-section d-none">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Our Architect Team</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>	
    <div class="row">
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url({{ asset('klift/images/staff-1.jpg') }});"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Achitect</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url({{ asset('klift/images/staff-2.jpg') }});"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Achitect</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url({{ asset('klift/images/staff-3.jpg') }});"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Achitect</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url({{ asset('klift/images/staff-4.jpg') }});"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Achitect</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section d-none">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">Recent Blog</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>	
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('klift/images/image_1.jpg') }}');">
          </a>
          <div class="text d-flex py-4">
            <div class="meta mb-3">
              <div><a href="#">Sep. 20, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <div class="desc pl-3">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry" data-aos-delay="100">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('klift/images/image_2.jpg') }}');">
          </a>
          <div class="text d-flex py-4">
            <div class="meta mb-3">
              <div><a href="#">Sep. 20, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <div class="desc pl-3">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry" data-aos-delay="200">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('klift/images/image_3.jpg') }}');">
          </a>
          <div class="text d-flex py-4">
            <div class="meta mb-3">
              <div><a href="#">Sep. 20, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <div class="desc pl-3">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftc-no-pb d-none">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2 order-md-last" style="background-image: url({{ asset('klift/images/img.jpg') }});">
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-md-5 pl-md-5 heading-section-with-line">
          <div class="pr-md-5 mr-md-5">
            <span class="subheading">Perfect</span>
            <h2 class="mb-4">We Make Perfection</h2>
          </div>
        </div>
        <div class="pr-md-5 mr-md-5">
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
          <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-counter">
  <div class="">
    <div class="row">
      <div class="col-md-12">
		<img src="{{ asset('/klift/uploads/'.APP\Models\Settings::find(1)->add_three) }}" style="width:100%;"/>
	  </div>
	</div>
  </div>
</section>


<section>
	<div class="container">
		<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://http-127-0-0-1-8000-opkfgj9gg3.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
</section>


@endsection