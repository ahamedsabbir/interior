@extends('starlight/app')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
	  <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Data Table</h5>
          <p>DataTables is a plug-in for the jQuery Javascript library.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-20p">Photo</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
@foreach($customer as $customer_key => $customer_value)
<tr>
  <td>{{$customer_value->name}}</td>
  <td>{{$customer_value->title}}</td>
  <td><img src="{{ asset('/klift/uploads/'.$customer_value->photo) }}" style="width:20px;"/></td>
  <td>
	<a href="{{ url('dashboard/customer/edit/page/'.$customer_value->id) }}">Edit</a>
	<a href="{{ url('dashboard/customer/remove/'.$customer_value->id) }}" onclick="confirm()">Delete</a>
  </td>
</tr>  
@endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
	</div>
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('script')
<script>
$(function(){
	'use strict';

	$('#datatable1').DataTable({
	  responsive: true,
	  language: {
		searchPlaceholder: 'Search...',
		sSearch: '',
		lengthMenu: '_MENU_ items/page',
	  }
	});

	$('#datatable2').DataTable({
	  bLengthChange: false,
	  searching: false,
	  responsive: true
	});

	// Select2
	$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

});
</script>
@endsection