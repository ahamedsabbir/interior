@extends('starlight/app')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
	  @foreach($settings as $settings_key => $settings_value)
	  <form action="{{ url('dashboard/settings/update/function') }}" method="post"  enctype="multipart/form-data">
		  @csrf
		  <div class="card pd-20 pd-sm-40">
			  <h6 class="card-body-title">Top Label Layout</h6>
			  <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
			  <div class="form-layout">
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="name" value="{{ $settings_value->name }}" placeholder="Enter name">
					</div>
				  </div>
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">				
					<div class="form-group">
					  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="icon">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-4">
					<img src="{{ asset('/klift/uploads/'.$settings_value->icon) }}" style="width:150px;"/>
				  </div><!-- col-4 -->
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">				
					<div class="form-group">
					  <label class="form-control-label">Add One: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="add_one">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-4">
					<img src="{{ asset('/klift/uploads/'.$settings_value->add_one) }}" style="width:150px;"/>
				  </div><!-- col-4 -->
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">				
					<div class="form-group">
					  <label class="form-control-label">Add Two: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="add_two">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-4">
					<img src="{{ asset('/klift/uploads/'.$settings_value->add_two) }}" style="width:150px;"/>
				  </div><!-- col-4 -->
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">				
					<div class="form-group">
					  <label class="form-control-label">Add Three: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="add_three">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-4">
					<img src="{{ asset('/klift/uploads/'.$settings_value->add_three) }}" style="width:150px;"/>
				  </div><!-- col-4 -->
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">				
					<div class="form-group">
					  <label class="form-control-label">Add Four: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="add_four">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-4">
					<img src="{{ asset('/klift/uploads/'.$settings_value->add_four) }}" style="width:150px;"/>
				  </div><!-- col-4 -->
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
					  <textarea class="form-control" name="address">{{ $settings_value->address }}</textarea>
					</div>
				  </div>
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="email" value="{{ $settings_value->email }}" placeholder="Enter name">
					</div>
				  </div>
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="mobile" value="{{ $settings_value->mobile }}" placeholder="Enter name">
					</div>
				  </div>
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Twitter: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="twitter" value="{{ $settings_value->twitter }}" placeholder="Enter name">
					</div>
				  </div>
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Instagram: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="instagram" value="{{ $settings_value->instagram }}" placeholder="Enter name">
					</div>
				  </div>
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Facebook: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="facebook" value="{{ $settings_value->facebook }}" placeholder="Enter name">
					</div>
				  </div>
				</div>
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Copyright: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="copyright" value="{{ $settings_value->copyright }}" placeholder="Enter name">
					</div>
				  </div>
				</div>
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