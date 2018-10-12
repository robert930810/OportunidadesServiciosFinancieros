<?php $__env->startSection('content'); ?>
	<div id="oportuyaSlider">
		<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="containImg">
				<img src="images/<?php echo e($slider['img']); ?>" class="img-fluid" title="<?php echo e($slider['title']); ?>" />
				
				<div class="oportuyaSliderContent">
					
					<div class="oportuyaSliderTitle">
						<p>
							<?php
								list($titleChunkOne,$titleChunkTwo)=explode("-",$slider['title']);
								
								echo $titleChunkTwo;

							?>
						</p>
					</div>

					<div class="oportuyaSliderDescription">
						<p>
							<?php
							  echo $slider['description'];
							?>
						</p>
					</div>

					<div class="oportuyaSliderButton">
						<a href="">
							<?php
							  echo $slider['textButton'];
							?>
						</a>
					</div>

				</div>
									
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>