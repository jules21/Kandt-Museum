@extends('layouts.main');
@section('title', 'About Us')
@section('page', 'About Us')

@section('content')
			<!-- Start about info Area -->
			<section class="section-gap info-area" id="about">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">About US</h1>
								<p>Few words about Kandt Museum</p>
							</div>
						</div>
					</div>
					<div class="single-info row mt-10">
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="{{asset('img/kandt.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30 p-3"><span class="text-center">Kandt House</span> <br>
									Natural History Museum <br>
								</h2>
								<p>
									Kandt House Museum, the former Natural History Museum is located at KN 90 St, around one kilimiter from downtown. This museum is formerly well known as Natural History Museum (NHM). Its name as NHM was changed into Kandt House Museum since December, 17th 2017.
								</p>
								<br>
								<p>
									Richard Kandt was the first colonial governor of Rwanda, on behalf of Germany, until the early 1900s. At present, the Kandt House Museum in Kigali comprises three main parts.
									
									The first part presents Rwandan life in all its aspects – social, economic, and political – before the colonial period.
								</p>
								<br>
								<p>
								The second part traces the experience of the Rwandan people during the colonial period. Following the Berlin Conference in 1884, the Germans ruled Rwanda until 1916, when the Belgians took over under the League of Nations Mandate after World War I. Richard Kandt’s life and deeds in Rwanda are covered here.
							</p>
							
							
								</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End about info Area -->
	
@endsection