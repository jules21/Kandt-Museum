@extends('layouts.main');
@section('title', 'Artifacts')
@section('page', 'Affordable Artifacts')

@section('content')
<section class="upcoming-exibition-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">best affordable artifacts</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>						
			<div class="row">
					@if (!$products->isEmpty())
					@foreach ($products as $product)
				<div class="col-lg-4 col-md-6 single-exhibition">
					<div class="thumb">
							<img class="" src="images/artifacts/{!! $product->photo !!}" alt=""  height="250" width="350">					
					</div>
					<p class="date">{{$product->year}}</p>
					<a href="{{ url('payment', $product->id) }}"><h4>{{$product->name }}</h4></a>
					<p>
							{{$product->description}}
					</p>
					<div class="meta-bottom d-flex justify-content-start">
						<p class="price">{{$product->amount}} RWF</p>
					</div>									
				</div>
				@endforeach
				@else
				<div class="alert alert-info alert-dismissible" role="alert">
					<strong>No Artifact To sell!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				@endif																		
			</div>
		</div>	
	</section>
	
@endsection