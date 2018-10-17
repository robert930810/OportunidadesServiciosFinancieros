<?php $__env->startSection('content'); ?>
	<div id="sliderPrincipalLibranza">
		
	</div>


	<div id="creditoLibranza">
		<div class="container">
			<h2 class="creditoLibranza-title text-center">Todo lo que puedes hacer con <br> nuestro <strong>crédito de libranza</strong></h2>
			<div class="row">
				<div class="col-md-12 col-lg-4 creditoLibranza-contianerTexto">
					<img src="<?php echo e(asset('images/libranza-creditoElectrodomestico.png')); ?>" alt="Crédito para electrodomésticos" class="img-fluid creditoLibranza-img">
					<h3 class="creditoLibranza-titleText">Crédito para <br> electrodomésticos</h3>
					<p class="creditoLibranza-text">
						A través de nuestras tiendas Oportunidades a nivel nacional, Te financiamos hasta por 60 meses en el electrodoméstico que tanto quieres. <br>
						<strong>¡Compralo a crédito!</strong>
					</p>
				</div>
				<div class="col-md-12 col-lg-4 creditoLibranza-contianerTexto">
					<img src="<?php echo e(asset('images/libranza-creditoMotos.png')); ?>" alt="Crédito para motos" class="img-fluid creditoLibranza-img">
					<h3 class="creditoLibranza-titleText">Crédito <br> para motos</h3>
					<p class="creditoLibranza-text">
						Accede a la moto que quieres a través de nuestras líneas de crédito que se adaptan a tus posibilidades de pago. te damos hasta 108 mese para que te la lleves. <br>
						<strong>¡Compra tu moto a crédito!</strong>
					</p>
				</div>
				<div class="col-md-12 col-lg-4 creditoLibranza-contianerTexto">
					<img src="<?php echo e(asset('images/libranza-creditoViajes.png')); ?>" alt="Crédito para viajes" class="img-fluid creditoLibranza-img">
					<h3 class="creditoLibranza-titleText">Crédito <br> para viajes</h3>
					<p class="creditoLibranza-text">
						Ahora puedes viajar por el mundo financiando tus paquetes turísticos nacionales hasta por 24 meses e internacionales hasta por 48 meses. <br>
						<strong>¡Viaja Ahora!</strong>
					</p>
				</div>
			</div>
		</div>
	</div>


	<div id="formularioSimulador" ng-app="appLibranzaLiquidador" ng-controller="libranzaLiquidadorCtrl">
		<div class="container">
			<h2 class="formularioSimulador-title text-center">Simula tu <strong>Crédito</strong></h2>
			<form >
				<div class="form-group">
					<label>Linea de Crédito</label>
					<select class="form-control"></select>
				</div>
			</form>
		</div>
	</div>

	<div id="credibilidad">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-4 text-center">
					<img src="<?php echo e(asset('images/libranza-experienciaMapa.png')); ?>" alt="" class="img-fluid credibilidad-img">
					<p class="credibilidad-text ">
						56 puntos de atención  <br>
						al público
					</p>
				</div>
				<div class="col-md-12 col-lg-4 text-center">
					<img src="<?php echo e(asset('images/libranza-experienciaAliados.png')); ?>" alt="" class="img-fluid credibilidad-img">
					<p class="credibilidad-text ">
						Más de 40 Aliados estratégicos <br>
						en todo el territorio nacional
					</p>
				</div>
				<div class="col-md-12 col-lg-4 text-center">
					<img src="<?php echo e(asset('images/libranza-experienciaClientes.png')); ?>" alt="" class="img-fluid credibilidad-img">
					<p class="credibilidad-text ">
						Más de 500.000 clientes <br>
						atendidos en los últimos 5 años
					</p>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>