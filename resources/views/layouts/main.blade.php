<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

	<title>Kandt Museum | @yield('title')</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		<link rel="stylesheet" href="{{asset('/css/ladda-themeless.min.css')}}">
	</head>
	<body>
		@include('partials.header')
		<!-- start banner Area -->
		<section class="banner-area relative exception" id="home">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
						@yield('page')	
						</h1>
						<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> @yield('page')</a></p>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		@yield('content')
		@include('partials.footer')


		<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		  <script src="{{asset('js/easing.min.js')}}"></script>
		<script src="{{asset('js/hoverIntent.js')}}"></script>
		<script src="{{asset('js/superfish.min.js')}}"></script>
		<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('js/justified.min.js')}}"></script>
		<script src="{{asset('js/jquery.sticky.js')}}"></script>
		<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('js/parallax.min.js')}}"></script>
		<script src="{{asset('js/mail-script.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
		@include('sweetalert::alert')
		<script src="{{asset('/js/spin.min.js')}}"></script>
		 <script src="{{asset('/js/ladda.min.js')}}"></script>
		 <script src="{{asset('/js/custom_script.js')}}"></script>


	</body>
</html>
