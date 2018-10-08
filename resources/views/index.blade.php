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
		<div class="row resetRow">
			<div class="col-sm-8 offset-sm-3 col-lg-2 offset-lg-1 conoce-containTarjeta text-center">
				<div class="conoce-TarjetaOportuya">
					<h3 class="conoce-titleTarjeta">Tarjeta de <strong>crédito Oportuya</strong></h3>
					<img src="images/servicios_CreditoOportuyaIcon.png" class="img-fluid conoce-tarjetasImg" alt="">
					<p class="conoce-tarjetasTexto">
						Electrodomesticos, 
						avances en efectivo 
						y muchas cosas más
					</p>
				</div>
				<img src="images/conoce-oportuyaImagen.png" alt="Conoce nuestra tarjeta OportuYa" class="img-fluid" />
			</div>
			<div class="col-sm-8 offset-sm-3 col-lg-2 offset-lg-0 conoce-containTarjeta text-center">
				<div class="conoce-creditoMotos">
					<h3 class="conoce-titleTarjetaMotos">Crédito <strong>motos</strong></h3>
					<img src="images/servicios_motosIcon.png" class="img-fluid conoce-tarjetasImg" alt="">
					<p class="conoce-tarjetasTexto">
						Te damos credito 
						para que pongas 
						a rodar tus aventuras
					</p>
				</div>
				<img src="images/conoce-motoImagen.png" alt="Conoce nuestros créditos para motos" class="img-fluid" />
			</div>
			<div class="col-sm-8 offset-sm-3 col-lg-2 offset-lg-0 conoce-containTarjeta text-center">
				<div class="conoce-creditoLibranza">
					<h3 class="conoce-titleTarjetaMotos">Crédito <strong>libranza</strong></h3>
					<img src="images/servicios_libranzaIcon.png" class="img-fluid conoce-tarjetasImg" alt="">
					<p class="conoce-tarjetasTexto">
						¡Por que es momento
						de disfrutar la vida!
					</p>
				</div>
				<img src="images/conoce-libranzaImagen.png" alt="Conoce nuestros créditos de libranza" class="img-fluid" />
			</div>
			<div class="col-sm-8 offset-sm-3 col-lg-2 offset-lg-0 conoce-containTarjeta text-center">
				<div class="conoce-seguros">
					<h3 class="conoce-titleTarjetaSeguros"><strong>Seguros</strong></h3>
					<img src="images/servicios_segurosIcon.png" class="img-fluid conoce-tarjetasImg" alt="">
					<p class="conoce-tarjetasTexto">
						Asegura tu patrimonio
						y el bienestar de 
						quienes están 
						a t​u lado.​​​​​​
					</p>
				</div>
				<img src="images/conoce-segurosImagen.png" alt="Conoce nuestro servicio de seguros" class="img-fluid" />
			</div>
			<div class="col-sm-8 offset-sm-3 col-lg-2 offset-lg-0 conoce-containTarjeta text-center">
				<div class="conoce-viajes">
					<h3 class="conoce-titleTarjetaSeguros"><strong>Viajes</strong></h3>
					<img src="images/servicios_viajesIcon.png" class="img-fluid conoce-tarjetasImg" alt="">
					<p class="conoce-tarjetasTexto">
						Asegura tu patrimonio
						y el bienestar de 
						quienes están 
						a t​u lado.​​​​​​
					</p>
				</div>
				<img src="images/conoce-viajesImagen.png" alt="Conoce nuestro servicio de viajes" class="img-fluid" />
			</div>
		</div>
	</div>

	<div id="video">
		<h3 class="video-title">En Oportunidades tenemos todo para ti</h3>
		<img src="images/video-botonPlay.png" alt="Ver Vídeo" class="img-fluid video-botonPlay">
		<div class="col-12 col-sm-12 col-lg-4 video-containText">
			<p>
				<img src="images/video-ubicacionIcon.png" alt="" class="img-fluid video-img">
				<span class="video-text">46 Almacenes respaldan su compra.</span>
			</p>
			<p>
				<img src="images/video-antiguedadIcon.png" alt="" class="img-fluid video-img">
				<span class="video-text">49 años de servicio.</span>
			</p>
			<p>
				<img src="images/video-electrodomesticosIcon.png" alt="" class="img-fluid video-img">
				<span class="video-text">Líder en electrodomésticos.</span>
			</p>
			<p>
				<img src="images/video-descuentosIcon.png" alt="" class="img-fluid video-img">
				<span class="video-text">Los mejores descuentos.</span>
			</p>
		</div>
	</div>
@endsection