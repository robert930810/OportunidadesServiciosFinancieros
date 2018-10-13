@extends('layouts.app')

@section('content')
	
<!-- Slider Section Oportuya Page -->

	<div id="oportuyaSlider">
		@foreach($images as $slider)
			<div class="containImg">
				<img src="images/{{ $slider['img'] }}" class="img-fluid" title="{{ $slider['title'] }}" />
				
				<div class="oportuyaSliderContent">
					
					<div class="oportuyaSliderTitle">
						
							@php
								$titleChunk=explode("-",$slider['title'],2);								
								
								$chunkOne= @$titleChunk[0];
								$chunkTwo= @$titleChunk[1];

								$chunkOneExplode= explode("_", $chunkOne,2);
								$chunkTwoExplode= explode("_",$chunkTwo,2);

								$chunkExplodeOne=@$chunkOneExplode[0];
								$chunkExplodeTwo=@$chunkOneExplode[1];
								$chunkExplodeThree=@$chunkTwoExplode[0];
								$chunkExplodeFour=@$chunkTwoExplode[1];
							@endphp

						<p>
							@php
								echo $chunkExplodeOne.' <span class="textTitleSliderPink">'.$chunkExplodeTwo.'</span>';
							@endphp							
						</p>
						<p>
							@php
								echo $chunkExplodeThree.' <span class="textTitleSliderBlue">'.$chunkExplodeFour.'</span>';
							@endphp							
						</p>

					</div>

					<br>

					<div class="oportuyaSliderDescription">
						<p>
							@php
							  echo $slider['description'];
							@endphp
						</p>
					</div>

					<br>
					<br>

					<div class="oportuyaSliderButton">
						<p>
							<a href="">
								@php
								  echo $slider['textButton'];
								@endphp
							</a>
						</p>
					</div>

				</div>
									
			</div>
		@endforeach
	</div>


<!-- Credit Card Section -->

	<div id="oportuyaCards">
		<div class="oportuyaCardsContent">
			<div class="row contentCards">
				<div class="col-md-4 contentCreditcards beforeLine">
					<img src="{{ asset('images/tarjetaGray.png') }}">
					<p class="titleContentCard">
						<span>Tarjeta de crédito gray<i class="fa fa-check-square-o checkIcon"></i></span>  
					</p>
					<p class="descriptionContentCard">
						Con tu tarjeta oportuya tienes avance de efectivo hasta $500.000
					</p>
					<p class="buttonCard">
						<a href="" class="buttonCreditCard">Conoce más</a>
					</p>
				</div>
				<div class="col-md-4 contentCreditcards beforeLine">
					<img src="{{ asset('images/tarjetaBlue.png') }}">
					<p class="titleContentCard">
						<span>Tarjeta de crédito Blue<i class="fa fa-check-square-o checkIcon"></i></span>  
					</p>
					<p class="descriptionContentCard">
						¿Aún no la tienes? ¡Pidela ya!
					</p>
					<p  class="buttonCard">
						<a href="" class="buttonCreditCard">Conoce más</a>
					</p>
				</div>
				<div class="col-md-4 contentCreditcards">
					<img src="{{ asset('images/tarjetaBlack.png') }}">
					<p class="titleContentCard">
						<span>Tarjeta de crédito Black<i class="fa fa-check-square-o checkIcon"></i></span>  
					</p>
					<p class="descriptionContentCard">
						Ofertas especiales permanentes
					</p>
					<p class="buttonCard">
						<a href="" class="buttonCreditCard">Conoce más</a>
					</p>
				</div>
			</div>
		</div>
	</div>

<!--Requirements Section -->
	<div id="requirements">
		<div class="row requirementsContent">
			<div class="col-md-6 contentRequirements">
				<img src="{{asset('images/requirementsIcon.png')}}">
				<p class="titleRequirements">
					Requisitos
				</p>
				<p>
					<a href="">
						
					</a>
				</p>
			</div>
			<div class="col-md-6 contentRequirements">
				<img src="{{asset('images/howGetIcon.png')}}">
				<p class="titleRequirements">
					Como Tenerla
				</p>
				<p>
					<a href="">
						
					</a>
				</p>
			</div>
		</div>
	</div>

@stop