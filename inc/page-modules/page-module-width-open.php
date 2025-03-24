product_image_bullets<?php if ( get_sub_field('background_width') == 'full-width-wrapper'): ?>
<div class="full <?php get_template_part( '/inc/page-modules/page-module-options-spacing' ); ?> <?php the_sub_field( 'background_color' ); ?>">
	<div class="content-full">
	<?php elseif (get_sub_field('background_width') == 'normal-width' ): ?>
		<div class="full <?php get_template_part( '/inc/page-modules/page-module-options-spacing' ); ?> <?php the_sub_field( 'background_color' ); ?>">
			<div class="content">
				<?php endif; ?>