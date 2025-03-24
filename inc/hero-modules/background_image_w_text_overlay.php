<?php
$background_type = get_sub_field('background_type');

if ($background_type) :
	$background_image = ($background_type === 'image') ? get_sub_field('background_image') : null;
	?>
	<div class="full">
		<div class="<?= ($background_type === 'video') ? 'background_image_text_overlay_product' : 'container' ?>">
			<?php if ($background_type === 'image' && $background_image) : ?>
				<div class="bg-img" style="background-image: url('<?php echo esc_url($background_image['url']); ?>');">
				<?php elseif ($background_type === 'video') : ?>
					<video autoplay muted loop playsinline>
						<source src="<?php the_sub_field('background_video'); ?>" type="video/mp4">
						</video>
						<div class="background_image_text_overlay_gradient_product"></div>
					<?php endif; ?>

					<div class="section_hero_text <?php the_sub_field('text_layout'); ?>">
						<h1 class="white"><?php the_sub_field('title'); ?></h1>
						<h5 class="nomargin white"><?php the_sub_field('text'); ?></h5>
					</div> <!-- section_hero_text -->

					<?php if ($background_type === 'image' && $background_image) : ?>
					</div> <!-- bg-img -->
				<?php endif; ?>
			</div> <!-- container -->
		</div> <!-- full -->
		<?php
	endif;
?>