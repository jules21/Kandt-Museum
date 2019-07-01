@extends('layouts.main');
@section('title', 'Exhibitions')
@section('page', 'Booking Event reservation')

@section('content')
@include('partials.success')
@include('partials.error')
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area upcoming-event-area section-gap">
					<div class="container">
						<div class="row d-flex justify-content-center">
								<div class="menu-content pb-60 col-lg-10">
									<div class="title text-center">
										<h1 class="mb-10"> {{$event->title}} </h1>
										<div class="row">
											<div class="col-md-8  offset-md-2">
												<div class="card shadow">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																	<h5>Booking Form</h5>
																	<hr>
				<div class="form-group">
					<form action=" {{route('bookTicket')}} " method="post">
						@csrf
						<input type="hidden" value="{{$event->title}}" name="exhibition_title">
						<input type="hidden" value="{{$event->id}}" name="exhibition_id">
						<input type="hidden" value="{{$event->description}}" name="exhibition_description">
						<div class="form-group">
							<div class="label">Your Name</div>
							<input type="text" name="names" class="form-control" placeholder="First & Last Name" value="{{ old('names') }}" >
						</div>
					<div class="form-group">
						<div class="label">Your Email</div>
						<input type="email" name="email" class="form-control" placeholder="Email Address">
					</div>
					<div class="form-group">
						<div class="label">Your Phone number</div>
						<input type="tel" name="phone" class="form-control" placeholder="Phone No." value="{{ old('phone') }}" >
					</div>
				
				
					<button class="btn btn-primary btn-large btn-block">Booking Ticket</button>

					</form>
					
	
				</div>
	
																</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>	
				</section>
				<!-- End blog-posts Area -->
	
@endsection