<?php
	$id = get_the_ID();
?>
<section id="concept" class="padding-70 bgBlack">
	<div class="row">
		<div class="main-title">
			<h2 class="title colorGold"><?php echo get_field('title_concept', $id); ?></h2>
			<img src="<?php echo get_field('icon_concept', $id); ?>">
			<h3 class="subtitle"><?php echo get_field('subtitle_concept', $id); ?></h3>
		</div>
		<div class="content">
			<?php echo get_field('contenu_texte_section_concept', $id); ?>
		</div>

	</div><!-- end .row -->
</section><!-- end #concept -->