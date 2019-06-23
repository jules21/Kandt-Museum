@extends('layouts.main');
@section('title', 'Gallery')
@section('page', 'Gallery')
@section('content')
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap gallery-page-area" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Exhibition Gallery</h1>
							</div>
						</div>
					</div>
					<div id="grid-container" class="row">
						@if (!$gallery->isEmpty())
						@foreach($gallery as $photo)
						<a class="single-gallery" href="images/artifacts/{!! $photo->photo !!}"><img class="grid-item" src="images/artifacts/{!! $photo->photo !!}"></a>
						@endforeach
						@else
							<div class="alert alert-info col-12 text-center">
								No Image Added Yet!
							</div>
						@endif

					</div>
				</div>
			</section>
			<!-- End gallery Area -->	
	
@endsection