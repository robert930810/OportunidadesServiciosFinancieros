<?php $__env->startSection('title', 'Seguros'); ?>

<?php $__env->startSection('content'); ?>
	<div id="construccion">
		<div class="container">
			<h2 class="creditoLibranza-title text-center">Esta sección está actualmente en construcción</h2>
			<p class="text-center">Si te interesa conocer más sobre seguros, déjanos tus datos y un asesor se pondrá en contacto</p>
			<div class="col-12 col-sm-8 offset-sm-2">
				<form role=form method="POST" action="<?php echo e(route('seguros.store')); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="typeProduct" value="Seguros">
					<input type="hidden" name="typeService" value="Seguros">
					<div class="form-group">
						<label for="name" class="control-label">Nombres</label>
						<input type="text" name="name" class="form-control" id="name" />
					</div>
					<div class="form-group">
						<label for="lastName" class="control-label">Apellidos</label>
						<input type="text" name="lastName" class="form-control" id="lastName" />
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Correo electronico</label>
						<input type="email" name="email" class="form-control" id="email" />
					</div>
					<div class="form-group">
						<label for="telephone class="control-label">Teléfono</label>
						<input type="tel" name="telephone" class="form-control" id="telephone" />
					</div>
					<div class="form-group">
						<label for="ciudad class="control-label">Ciudad</label>
						<input type="text" name="city" class="form-control" id="ciudad" />
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							Guardar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>