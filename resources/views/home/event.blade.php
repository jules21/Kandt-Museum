@extends('layouts.main');
@section('title', 'Exhibitions')
@section('page', 'Events')

@section('content')
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area upcoming-event-area section-gap">
					<div class="container">
							<div class="row d-flex justify-content-center">
									<div class="menu-content pb-60 col-lg-10">
										<div class="title text-center">
											<h1 class="mb-10">Checkout our Upcoming Events</h1>
											<p>Who are in extremely love with eco friendly system.</p>
										</div>
									</div>
								</div>
						<div class="row">
							<div class="col-lg-8 post-list blog-post-list">
			<!-- Start upcoming-event Area -->
						<div class="row">
							@if (!$events->isEmpty())
								@foreach ($events as $event)
								<div class="col-lg-6 event-left">
										<div class="single-events">
											<img class="" src="images/exhibitions/{!! $event->photo !!}" alt=""  height="250" width="350">
											<a href="#"><h4> {{$event->title}} </h4></a>
											<h6><span> {{$event->date }} </span> at Kandt House museum</h6>
											<p>
												{{$event->description}}
											</p>
											<a href=" {{route('events.show', $event->id)}} " class="primary-btn text-uppercase">view details</a>
										</div>
									</div>
								@endforeach
							@else
							<div class="alert alert-info alert-dismissible" role="alert">
									<strong>No Event</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
							@endif

						</div>

				<!-- End upcoming-event Area -->																	
							</div>
							<div class="col-lg-4 sidebar">
	{{-- Add Recent Artifact --}}
								<div class="single-widget recent-posts-widget">
									<h4 class="title">Recent Artifacts</h4>
									@foreach ($artifacts as $artifact)
									<div class="blog-list ">
											<div class="single-recent-post d-flex flex-row">
												<div class="recent-thumb">
													<img class="img-fluid" src=" images/artifacts/{!! $artifact->photo !!} " alt="no image found" height="75.17" width="75.17">
												</div>
												<div class="recent-details">
													<a href="#">
														<h4>
															{{$artifact->name}}
														</h4>
													</a>
													<p>
															{{-- {{$artifact->created_at->diffForHumans()}} --}}
															{{ Carbon\Carbon::parse($artifact->created_at)->diffForHumans()}} 
													</p>
												</div>
											</div>  
																		 
										</div>  
									@endforeach
								</div>
	
									
				
	
							</div>
						</div>
					</div>	
				</section>
				<!-- End blog-posts Area -->
	
@endsection