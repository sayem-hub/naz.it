<!DOCTYPE html>
<html>
<head>

<title>{{ config('app.name') }}-NAZ IT Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="Bootstrap, Landing page, Responsive, Businnes, Portfolio, Corporate">
<meta name="Sayem" content="WebThemez">
<!-- CSS Files -->

<link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('assets/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/animate.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('assets/frontend/css/owl.theme.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/styles.css')}}" rel="stylesheet" media="screen">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,700' rel='stylesheet' type='text/css'>


<!-- Font Awesome -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-scroll">

<div id="top"></div>

@include('Frontend.Partials.header')

<div class="fullscreen landing parallax banner" data-img-width="2000" data-img-height="1325" data-diff="100">

	<div class="overlay">
		<div class="container">


			    @yield('main')


		</div>
	</div>
</div>

@include('Frontend.Partials.footer')

	<!-- javascript files -->
    <script src="{{asset('assets/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/ekko-lightbox-min.js')}}"></script>
	<script type="text/javascript">
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { event.preventDefault(); $(this).ekkoLightbox(); });
	</script>
	<script>
		new WOW().init();
	</script>
  </body>
</html>
