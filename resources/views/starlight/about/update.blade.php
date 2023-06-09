@extends('starlight/app')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
	  @foreach($about as $about_key => $about_value)
	  <form action="{{ url('dashboard/about/update/function') }}" method="post"  enctype="multipart/form-data">
		  @csrf
		  <div class="card pd-20 pd-sm-40">
			  <h6 class="card-body-title">Top Label Layout</h6>
			  <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
			  <div class="form-layout">
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="name" value="{{ $about_value->name }}" placeholder="Enter name">
					</div>
				  
					<div class="form-group">
					  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="title" value="{{ $about_value->title }}" placeholder="Enter title">
					</div>
					<div class="form-group">
					  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
					  <textarea class="form-control" name="description">{{ $about_value->description }}</textarea>
					</div>
					<div class="form-group">
					  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="icon">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-4">
					<img src="{{ asset('/klift/uploads/'.$about_value->icon) }}" style="width:230px;"/>
				  </div><!-- col-4 -->
				</div><!-- row -->
				<div class="form-layout-footer">
				  <button class="btn btn-info mg-r-5" type="submit" name="submit" value="update">Category Submit</button>
				</div><!-- form-layout-footer -->
			  </div><!-- form-layout -->
			</div><!-- card -->
		</form>
		@endforeach
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection