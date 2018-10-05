@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
	<div id="sliderPrincipal">
		@foreach($sliderPrincipal as $slider)
			<div class="containImg">
				<img src="images/{{ $slider['img'] }}" class="img-fluid" title="{{ $slider['title'] }}" />
			</div>
		@endforeach
	</div>

	<div id="conoce">
		<h2 class="conoce-title">Conoce todos los servicios <br> que tenemos para ti</h2>
		<div class="row">
			<div class="col-md-12 col-lg-2 offset-lg-1 text-center">
				<img src="images/conoce-oportuyaImagen.png" alt="" class="img-fluid" />
			</div>
			<div class="col-md-12 col-lg-2 text-center">
				<img src="images/conoce-motoImagen.png" alt="" class="img-fluid" />
			</div>
			<div class="col-md-12 col-lg-2 text-center">
				<img src="images/conoce-libranzaImagen.png" alt="" class="img-fluid" />
			</div>
			<div class="col-md-12 col-lg-2 text-center">
				<img src="images/conoce-segurosImagen.png" alt="" class="img-fluid" />
			</div>
			<div class="col-md-12 col-lg-2 text-center">
				<img src="images/conoce-viajesImagen.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
@endsection