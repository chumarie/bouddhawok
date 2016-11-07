<?php
	$id = get_the_ID();
	$slider = get_field('slider', $id);
?>

<section id="bienvenue" class="">
	<div class="row">
		<div id="ninja-slider">
			<div class="slider-inner">
				<ul>
					<?php foreach($slider as $slide): ?>
					<li>
						<a class="ns-img" href="<?php echo $slide['image']['url']; ?>"></a>
						<div class="caption"><?php echo $slide['legende']; ?></div>
					</li>
					<?php endforeach; ?>
				</ul>
				<div class="navsWrapper displaynone">
					<div id="ninja-slider-prev"></div>
					<div id="ninja-slider-next"></div>
				</div>
			</div>
		</div><!-- end .ninja-slider -->
	</div><!-- end .row -->
</section><!-- end #concept -->