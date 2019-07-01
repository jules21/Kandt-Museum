@extends('layouts.main');
@section('title', 'Artifacts')
@section('page', 'Artifact')

@section('content')
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area upcoming-event-area section-gap">
					<div class="container">

						<div class="row">
							{{-- vue single event --}}
							<div class="col-lg-8 post-list blog-post-list">
							<div class="single-post">
                                <img class="" src="{{asset('images/artifacts/'.$art->photo)}}"   height="312" width="670" alt="">
                                

								
									<h1>
										{{-- Cartridge Is Better Than Ever
                                        A Discount Toner --}}
                                        {{ $art->name }}
									</h1>
								
								<div class="content-wrap">
									<p>
                                            {{ $art->description }}
									</p>


									{{-- <blockquote class="generic-blockquote">
										“Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government.banking” 
									</blockquote> --}}
									


								</div>

               

							</div>																		
						</div>
								{{-- vue single event --}}
							<div class="col-lg-4 sidebar">
								{{-- Add Recent Artifact --}}
								<div class="single-widget recent-posts-widget">
									<h4 class="title">Recent Artifacts</h4>
									@foreach ($artifacts as $artifact)
									<div class="blog-list ">
											<div class="single-recent-post d-flex flex-row">
												<div class="recent-thumb">
													<img class="img-fluid" src=" {!!asset('images/artifacts/'.$artifact->photo) !!} " alt="no image found" height="75.17" width="75.17">
												</div>
												<div class="recent-details">
													<a href="{{route('art.show', $artifact->id)}}">
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
						{{-- events --}}
						<div class="section-gap row d-flex justify-content-center">
								<div class="menu-content pb-60 col-lg-10">
									<div class="title text-center">
										<h1 class="mb-10">Latest Ongoing Exhibitions</h1>
									</div>
								</div>
							</div>
						<div class="row">
								<div class="active-exibition-carusel">
									@if (!$events->isEmpty())
										@foreach ($events as $event)
										<div class="single-exibition item">
												<img src="{{asset('images/exhibitions/'.$event->photo)}}" alt="" class="mb-4" height="250" width="350">
		
												<a href="{{route('event.show', $event->id)}}"><h4> {{$event->title}} </h4></a>
												<p>
													{{$event->description}}
												</p>
												<h6 class="date">{{$event->date}}</h6>
											</div>
										@endforeach
									@endif
		
								</div>
							</div>
						{{-- end here --}}
					</div>	
				</section>
				<!-- End blog-posts Area -->
	
@endsection