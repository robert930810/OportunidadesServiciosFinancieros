<?php $__env->startSection('content'); ?>
<div ng-app="appLibranzaLiquidador" ng-controller="libranzaLiquidadorCtrl">
	<div id="sliderPrincipalLibranza">
		<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="containImg">
				<img src="images/<?php echo e($slider['img']); ?>" class="img-fluid img-responsive" title="<?php echo e($slider['title']); ?>" />
				<div class="sliderPrincipal-containTextLeft">
					<p class="sliderPrincipalLibranza-text">
						<?php
							echo $slider['description'];
						?>
					</p>

					<a href="#formularioSimulador" class="sliderPrincipalLibranza-button"><?php echo $slider['textButton']; ?></a>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


	<div id="formularioSimulador">
		<div class="containerFormulario">
			<h2 class="formularioSimulador-title text-center">Simula tu <strong>Crédito</strong></h2>
			<p class="formularioSimulador-textPrincipal text-center">
				El crédito de libranza tiene la ventaja del descuento de cuota directamente de nómina, previo Convenio entre tu empresa y el banco. Busca tu empleador o administrador de pensión en nuestra base de convenios
			</p>
			<form ng-submit="simular()">
				<div class="form-group">
					<label class="formularioSimulador-labelFormulario" for="lineaCredito">Linea de Crédito :</label>
					<select id="lineaCredito" class="form-control" ng-model="libranza.lineaCredito" ng-options="linea.value as linea.label for linea in lineaCredito"></select>
				</div>
				<div class="form-group">
					<label class="formularioSimulador-labelFormulario" for="pagaduria">Pagaduría :</label>
					<select id="pagaduria" class="form-control" ng-model="libranza.pagaduria" ng-options="pagaduriaItem.value as pagaduriaItem.label for pagaduriaItem in pagadurias"></select>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-2">
						<div class="form-group">
							<label for="edad" class="formularioSimulador-labelFormulario">Edad :</label>
							<input type="number" class="form-control" id="edad" ng-model="libranza.edad" ng-blur="calculateData()">
						</div>
					</div>
					<div class="col-sm-12 col-md-10">
						<div class="form-group">
							<label for="tipoCliente" class="formularioSimulador-labelFormulario">Tipo de Cliente :</label>
							<select class="form-control" id="tipoCliente" ng-model="libranza.tipoCliente" ng-options="tipo.value as tipo.label for tipo in tipoCliente"></select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="salarioBasico" class="formularioSimulador-labelFormulario">Salario Básico :</label>
					<input type="text" id="salarioBasico" class="form-control" ng-model="libranza.salarioBasico" ng-blur="calculateData()">
				</div>
				<div class="form-group">
					<label for="descuentosLey" class="formularioSimulador-labelFormulario">Descuentos de ley :</label>
					<input type="text" id="descuentosLey" class="form-control" ng-model="libranza.descuentosLey" ng-disabled="true">
				</div>
				<div class="form-group">
					<label for="otrosDescuentos" class="formularioSimulador-labelFormulario">Otros Descuentos :</label>
					<input type="text" id="otrosDescuentos" class="form-control" ng-model="libranza.otrosDescuentos" ng-blur="calculateData()" >
				</div>
				<div class="form-group">
					<input type="hidden" id="margenSeguridad" class="form-control" ng-model="libranza.margenSeguridad">
				</div>
				<div class="form-group" ng-if="libranza.lineaCredito == 'Libre inversion + Compra de cartera'">
					<label for="coutaCompra" class="formularioSimulador-labelFormulario">Valor Cuota Compra :</label>
					<input type="text" id="coutaCompra" class="form-control" ng-model="libranza.coutaCompra" ng-blur="calculateData()" />
				</div>
				<div class="form-group">
					<label for="cupoDisponible" class="formularioSimulador-labelFormulario">Cupo disponible :</label>
					<input type="text" id="cupoDisponible" class="form-control" ng-model="libranza.cupoDisponible" ng-disabled="true"/>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn formularioSimulador-buttonForm">Simular</button>
				</div>
			</form>
			<p class="formularioSimulador-textInferior text-center">
				También, puedes comunicarte con Tu Línea Libranza al 353 50 67 en Bogotá o 01 8000 42 5828 (opción 2) a Nivel Nacional. <br>
				“El cálculo que se presenta es aproximado e informativo y puede presentar variación. No constituye asesoría contable ni tributaria. <br>
				Para obtener información y cálculo acerca del Valor Total Unificado (VTU) por favor remítase a su oficina más cercana. <br>
				(*) Campos obligatorios requeridos para continuar con la simulación y solicitud. <br>
				Para más información visite los términos y condiciones”
			</p>
		</div>
	</div>

	<div id="credibilidad">
		<div class="container">
			<h2 class="credibilidad-title text-center">Experiencia <strong>Credibilidad</strong></h2>
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


	<div class="modal fade hide" id="simularModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="table">
						<table class="table table-hover">
							<thead>
								<tr>
									<td class="col-10">Monto máximo aprobado por plazo</td>
									<td class="col-2">Plazo</td>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="plazo in plazos">
									<td>{{ plazo.amount }}</td>
									<td>{{ plazo.timeLimit }}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="text-center">
						<button class="btn formularioSimulador-buttonForm" ng-click="solicitar()">Solicitar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade hide" id="solicitarModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form role="form">
						<div class="form-group">
							<label class="control-label">Nombres</label>
							<input type="text" name="name" class="form-control" id="nameForm" placeholder="Ingrese nombre">
						</div>
						<div class="form-group">
							<label class="control-label">Apellidos</label>
							<input type="text" name="name" class="form-control" id="nameForm" placeholder="Ingrese nombre">
						</div>
						<div class="form-group">
							<label class="control-label">Correo electronico</label>
							<input type="email" name="name" class="form-control" id="nameForm" placeholder="Ingrese nombre">
						</div>
						<div class="form-group">
							<label class="control-label">Teléfono</label>
							<input type="tel" name="name" class="form-control" id="nameForm" placeholder="Ingrese nombre">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								Guardar
							</button>
							<button type="button" class=" btn btn-danger" data-dismiss="modal" aria-label="Close">
								Cerrar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>