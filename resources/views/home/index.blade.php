@extends('layouts.main');
@section('page', 'Home')
@section('title', 'Home')

@section('content')
<style>
.exception{
	display: none;
}
</style>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8">
							<h6 class="text-white">Openning on 21st February, 2020</h6>
							<h1 class="text-white">
								Exhibition on Modern Era
							</h1>
							{{-- <p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
							</p> --}}
							<a href="#about" class="primary-btn text-uppercase mt-5">Learn More</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->
			<section class="service-area pt-100" id="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-clock"></span>
							  <h4>Openning Hours</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
							    	</p>
							    	<a href=" {{url('work')}} " class="text-uppercase primary-btn">Work Schedule</a>
							    </div>
							  </div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-rocket"></span>
							  <h4>Ongoing Exhibitions</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
							    	</p>
							    	<a href="{{ url('event') }}" class="text-uppercase primary-btn">Buy ticket</a>
							    </div>
							  </div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-briefcase"></span>
							  <h4>best affordable artifacts</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
							    	</p>
							    	<a href=" {{url('artifact')}} " class="text-uppercase primary-btn">Buy ticket</a>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->


			<!-- Start exibition Area -->
			<section class="exibition-area section-gap" id="exhibitions">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Ongoing Exhibitions from the scratch</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-exibition-carusel">
							@if (!$events->isEmpty())
								@foreach ($events as $event)
								<div class="single-exibition item">
										<img src="{{asset('images/exhibitions/'.$event->photo)}}" alt="" class="mb-4" height="250" width="350">

										<a href="#"><h4> {{$event->title}} </h4></a>
										<p>
											{{$event->description}}
										</p>
										<h6 class="date">{{$event->date}}</h6>
									</div>
								@endforeach
							@endif

						</div>
					</div>
				</div>
			</section>
			<!-- End exibition Area -->



			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Our Exhibition Gallery</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>
					<div id="grid-container" class="row">
						@foreach($gallery as $photo)
						<a class="single-gallery" href="images/artifacts/{!! $photo->photo !!}"><img class="grid-item" src="images/artifacts/{!! $photo->photo !!}"></a>
						@endforeach
					</div>
				</div>
			</section>
			<!-- End gallery Area -->
@endsection