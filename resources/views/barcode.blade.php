@extends('layouts.app')


@section('content')
<style type="text/css">
	img{
		padding-left: 20px;
	}
</style>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-primary" style="text-align: center;">Laravel 5 Barcode Generator Using milon/barcode</h1>
    </div>
</div>


<div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">


	<img src="data:image/png;base64,{{DNS2D::getBarcodePNG($artifact, 'QRCODE')}}" alt="barcode" />
	{{-- <br>
	<img src="data:image/png;base64,{{DNS2D::getBarcodePNG('17', 'PDF417')}}" alt="barcode" />
	<br>
	<img src="data:image/png;base64,{{DNS2D::getBarcodePNG('18', 'DATAMATRIX')}}" alt="barcode" /> --}}
</div>


@endsection