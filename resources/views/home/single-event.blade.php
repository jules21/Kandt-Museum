@extends('layouts.main');
@section('title', 'Exhibitions')
@section('page', 'Events')

@section('content')
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area upcoming-event-area section-gap">
					<div class="container">

						<div class="row">
{{-- vue single event --}}
<div class="col-lg-8 post-list blog-post-list">
							<div class="single-post">
                                <img class="" src="{{asset('images/exhibitions/'.$event->photo)}}"   height="312" width="670" alt="">
                                

								
									<h1>
										{{-- Cartridge Is Better Than Ever
                                        A Discount Toner --}}
                                        {{ $event->title }}
									</h1>
								
								<div class="content-wrap">
									<p>
                                            {{ $event->description }}
									</p>
                                    <div class="meta-bottom d-flex justify-content-between">
                                        <a href="{{route('event.booking', $event->id)}}" class="primary-btn text-uppercase">Book Now</a>
                                    </div>	

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
					</div>	
                </section>
                <section class="section-gap container">
                        <div class="menu-content pb-60 col-lg-10">
                                <div class="title text-center">
                                    <h1 class="mb-10">Best Affordable Artifacts</h1>
                                </div>
                            </div>
                        <div class="row">
                                @if (!$products->isEmpty())
                                @foreach ($products as $product)
                                <div class="col-lg-3 col-md-6 single-blog">
                                    <div class="thumb">
                                        <img class="img-fluid" src="{{asset('images/artifacts/'.$product->photo)}}" alt="">								
                                    </div>
                                    <p class="date">{{ $product->year }}</p>
                                    <a href="#"><h4>{{ $product->name }}</h4></a>
                                    <p>
                                            {{ $product->description }}
                                    </p>
                                    <div class="meta-bottom d-flex justify-content-between">
                                        <a href="#" class="primary-btn text-uppercase">Buy it!</a>
                                    </div>									
                                </div>	
                                @endforeach
                                @endif						
                            </div>
                </section>
				<!-- End blog-posts Area -->
	
@endsection