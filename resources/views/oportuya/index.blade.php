@extends('layouts.app')

@section('content')
	<div id="oportuyaSlider">
		@foreach($images as $slider)
			<div class="containImg">
				<img src="images/{{ $slider['img'] }}" class="img-fluid" title="{{ $slider['title'] }}" />
				
				<div class="oportuyaSliderContent">
					
					<div class="oportuyaSliderTitle">
						<p>
							@php
								list($titleChunkOne,$titleChunkTwo)=explode("-",$slider['title']);
								
								echo $titleChunkTwo;

							@endphp
						</p>
					</div>

					<div class="oportuyaSliderDescription">
						<p>
							@php
							  echo $slider['description'];
							@endphp
						</p>
					</div>

					<div class="oportuyaSliderButton">
						<a href="">
							@php
							  echo $slider['textButton'];
							@endphp
						</a>
					</div>

				</div>
									
			</div>
		@endforeach
	</div>
@stop