<?php $__env->startSection('content'); ?>
	
<!-- Slider Section Oportuya Page -->

	<div id="oportuyaSlider">
		<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="containImg">
				<img src="images/<?php echo e($slider['img']); ?>" class="img-fluid" title="<?php echo e($slider['title']); ?>" />
				
				<div class="oportuyaSliderContent">
					
					<div class="oportuyaSliderTitle">
						
							<?php
								$titleChunk=explode("-",$slider['title'],2);								
								
								$chunkOne= @$titleChunk[0];
								$chunkTwo= @$titleChunk[1];

								$chunkOneExplode= explode("_", $chunkOne,2);
								$chunkTwoExplode= explode("_",$chunkTwo,2);

								$chunkExplodeOne=@$chunkOneExplode[0];
								$chunkExplodeTwo=@$chunkOneExplode[1];
								$chunkExplodeThree=@$chunkTwoExplode[0];
								$chunkExplodeFour=@$chunkTwoExplode[1];
							?>

						<p>
							<?php
								echo $chunkExplodeOne.' <span class="textTitleSliderPink">'.$chunkExplodeTwo.'</span>';
							?>							
						</p>
						<p>
							<?php
								echo $chunkExplodeThree.' <span class="textTitleSliderBlue">'.$chunkExplodeFour.'</span>';
							?>							
						</p>

					</div>

					<br>

					<div class="oportuyaSliderDescription">
						<p>
							<?php
							  echo $slider['description'];
							?>
						</p>
					</div>

					<br>
					<br>

					<div class="oportuyaSliderButton">
						<p>
							<a href="">
								<?php
								  echo $slider['textButton'];
								?>
							</a>
						</p>
					</div>

				</div>
									
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>


<!-- Credit Card Section -->

	<div id="oportuyaCards">
		<div class="oportuyaCardsContent">
			<div class="row contentCards">
				<div class="col-md-4 contentCreditcards beforeLine">
					<img src="<?php echo e(asset('images/tarjetaGray.png')); ?>">
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
					<img src="<?php echo e(asset('images/tarjetaBlue.png')); ?>">
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
					<img src="<?php echo e(asset('images/tarjetaBlack.png')); ?>">
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
				<img src="<?php echo e(asset('images/requirementsIcon.png')); ?>">
				<p class="titleRequirements">
					Requisitos
				</p>
				<p>
					<a href="">
						
					</a>
				</p>
			</div>
			<div class="col-md-6 contentRequirements">
				<img src="<?php echo e(asset('images/howGetIcon.png')); ?>">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>