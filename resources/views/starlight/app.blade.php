<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('starlight/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('starlight/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('starlight/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">    
	<link href="{{ asset('starlight/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('starlight/css/starlight.css') }}">
    
</head>
<body>
	@include('starlight/inc/left_panel')
	@include('starlight/inc/head_panel')
	@include('starlight/inc/right_panel')
	<div class="sl-mainpanel">
		@include('starlight/inc/alert')
	</div>
	@yield('content')
</body>
    <!-- Scripts -->
	<script src="{{ asset('starlight/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('starlight/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('starlight/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('starlight/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('starlight/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('starlight/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('starlight/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('starlight/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('starlight/lib/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('starlight/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('starlight/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('starlight/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('starlight/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('starlight/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('starlight/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('starlight/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('starlight/lib/flot-spline/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('starlight/js/starlight.js') }}"></script>
    <script src="{{ asset('starlight/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('starlight/js/dashboard.js') }}"></script>
	@yield('script')
</html>
