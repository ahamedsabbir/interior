@extends('klift/app')
@section('content')
	<section class="home-slider js-fullheight owl-carousel d-sm-none d-md-block">
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

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			  <div class="col-md-7 heading-section ftco-animate">
				<h2 class="mb-4">Recent Gallery</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
			  </div>
			</div>	
			<div class="row">
			@foreach($gallery as $gallery_key => $gallery_value)
			  <div class="col-md-4 ftco-animate">
				<div class="blog-entry">
				  <a href="{{ asset('/klift/uploads/'.$gallery_value->photo) }}" class="block-20" style="background-image: url('{{ asset('/klift/uploads/'.$gallery_value->photo) }}');">
				  </a>
				  <div class="text d-flex py-4">
					<div class="meta mb-3">
					  <div><a href="{{ url('gallery/category/'.$gallery_value->category) }}">{{ naturalDate($gallery_value->created_at) }}</a></div>
					  <div><a href="{{ url('gallery/category/'.$gallery_value->category) }}">{{ App\Models\Category::find($gallery_value->category)->name }}</a></div>
					</div>
					<div class="desc pl-3">
						<h3 class="heading"><a href="{{ url('gallery/category/'.$gallery_value->category) }}">{{ $gallery_value->title }}</a></h3>
					</div>
				  </div>
				</div>
			  </div>
			  @endforeach
			</div>
			{{ $gallery->links() }}
		</div>
	</section>
@endsection