@extends('layouts.main');
@section('title', 'Booking Ticket')
@section('page', 'Booking Ticket')

@section('content')
			<!-- Start about info Area -->
			<section class="section-gap info-area" id="about">
				<div class="container">
						<form action=" {{route('bookTicket')}} " method="post">
							@csrf
						<div class="form-group">
							<div class="label">Exhibition Title</div>
							<input type="text" name="exhibition_title" class="form-control" placeholder="Your Name" value="{{ old('exhibition_title') }}" >
						</div>
						<div class="form-group">
							<div class="label">Names</div>
							<input type="text" name="names" class="form-control" placeholder="Your Name" value="{{ old('names') }}" >
						</div>
						<div class="form-group">
							<div class="label">Phone</div>
							<input type="tel" name="phone" class="form-control" placeholder="Your Phone number" value="{{ old('phone') }}" >
						</div>
						<input type="hidden" name="user_id" value="1">
						<input type="hidden" name="exhibition_id" value="1">
					
						<button class="btn btn-primary btn-large btn-block">Booking Ticket</button>

						</form>
						
						
						
				</div>
			</section>
			<!-- End about info Area -->
	
@endsection