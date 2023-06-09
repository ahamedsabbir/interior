<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ APP\Models\Settings::find(1)->name }}</title>
	<meta name="description" content="{{ APP\Models\Settings::find(1)->description }}">
	<meta name="author" content="{{ APP\Models\Settings::find(1)->author }}">
	<meta name="keywords" content="{{ APP\Models\Settings::find(1)->keywords }}">
	<link rel="icon" href="{{ asset('/klift/uploads/'.APP\Models\Settings::find(1)->icon) }}" />
	
	<!--facebook instragram -->
	<meta property="og:title" content="{{ APP\Models\Settings::find(1)->name }}" />
	<meta property="og:description" content="{{ APP\Models\Settings::find(1)->description }}" />
	<meta property="og:image" content="{{ asset('/klift/uploads/'.APP\Models\Settings::find(1)->icon) }}"/>
	
	<!--twitter -->
	<meta name="twitter:title" content="{{ APP\Models\Settings::find(1)->name }}" />
	<meta name="twitter:image" content="{{ asset('/klift/uploads/'.APP\Models\Settings::find(1)->icon) }}" />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('klift/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('klift/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('klift/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('klift/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('klift/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('klift/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('klift/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('klift/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('klift/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('klift/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('klift/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('klift/css/style.css') }}">
    
</head>
<body>
    <div id="app">
        @include('klift/inc/nav')
        @yield('content')
        @include('klift/inc/footer')
    </div>
    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
</body>
    <!-- Scripts -->
    <script src="{{ asset('klift/js/jquery.min.js') }}"></script>
    <script src="{{ asset('klift/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('klift/js/popper.min.js') }}"></script>
    <script src="{{ asset('klift/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('klift/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('klift/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('klift/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('klift/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('klift/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('klift/js/aos.js') }}"></script>
    <script src="{{ asset('klift/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('klift/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('klift/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('klift/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('klift/js/google-map.js') }}"></script>
    <script src="{{ asset('klift/js/main.js') }}"></script>
</html>
