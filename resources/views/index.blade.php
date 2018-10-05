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
@endsection