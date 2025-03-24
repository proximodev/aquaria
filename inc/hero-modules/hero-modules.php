<?php if ( have_rows( 'hero_modules' ) ): ?>
	<?php while ( have_rows( 'hero_modules' ) ) : the_row(); ?>


		<?php if ( get_row_layout() == 'home_hero_background_video_text_overlay' ) : ?>
			<?php get_template_part( 'inc/hero-modules/home_hero_background_video_text_overlay'); ?>

		<?php elseif ( get_row_layout() == 'text_hero' ) : ?>
			<?php get_template_part( 'inc/hero-modules/text_hero'); ?>

		<?php elseif ( get_row_layout() == 'two_column_text_image' ) : ?>
			<?php get_template_part( 'inc/hero-modules/two_column_text_image'); ?>

		<?php elseif ( get_row_layout() == 'background_image_w_text_overlay' ) : ?>
			<?php get_template_part( 'inc/hero-modules/background_image_w_text_overlay'); ?>


		<?php endif; // END first get_row_layout ?>

	<?php endwhile; ?>
	<?php endif; ?>