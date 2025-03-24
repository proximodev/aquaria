<?php if ( have_rows( 'page_modules' ) ): ?>
	<?php while ( have_rows( 'page_modules' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'home_three_column_product_block' ) : ?>
			<?php get_template_part( 'inc/page-modules/home_three_column_product_block'); ?>
		<?php elseif ( get_row_layout() == 'grid_blocks_3' ) : ?>
			<?php get_template_part( 'inc/page-modules/grid_blocks_3'); ?>
		<?php elseif ( get_row_layout() == 'grid_blocks_4' ) : ?>
			<?php get_template_part( 'inc/page-modules/grid_blocks_4'); ?>
		<?php elseif ( get_row_layout() == 'section_2_column_block' ) : ?>
			<?php get_template_part( 'inc/page-modules/section_2_column_block'); ?>
		<?php elseif ( get_row_layout() == 'statistics_block' ) : ?>
			<?php get_template_part( 'inc/page-modules/statistics_block'); ?>
		<?php elseif ( get_row_layout() == 'faq_block' ) : ?>
			<?php get_template_part( 'inc/page-modules/faq_block'); ?>
		<?php elseif ( get_row_layout() == 'column_text_three_column' ) : ?>
			<?php get_template_part( 'inc/page-modules/column_text_three_column'); ?>
		<?php elseif ( get_row_layout() == 'background_image_text_overlay' ) : ?>
			<?php get_template_part( 'inc/page-modules/background_image_text_overlay'); ?>
		<?php elseif ( get_row_layout() == 'product_image_bullets' ) : ?>
			<?php get_template_part( 'inc/page-modules/product_image_bullets'); ?>
		<?php elseif ( get_row_layout() == 'product_image_expandable_bullets' ) : ?>
			<?php get_template_part( 'inc/page-modules/product_image_expandable_bullets'); ?>
		<?php elseif ( get_row_layout() == 'column_text_image_three_column' ) : ?>
			<?php get_template_part( 'inc/page-modules/column_text_image_three_column'); ?>
		<?php elseif ( get_row_layout() == 'background_image_full_bleed_text_overlay_left' ) : ?>
			<?php get_template_part( 'inc/page-modules/background_image_full_bleed_text_overlay_left'); ?>
		<?php elseif ( get_row_layout() == 'home_installations_image_bullets' ) : ?>
			<?php get_template_part( 'inc/page-modules/home_installations_image_bullets'); ?>
		<?php elseif ( get_row_layout() == 'product_table' ) : ?>
			<?php get_template_part( 'inc/page-modules/product_table'); ?>
		<?php elseif ( get_row_layout() == 'bullet_list_three_column' ) : ?>
			<?php get_template_part( 'inc/page-modules/bullet_list_three_column'); ?>
		<?php elseif ( get_row_layout() == 'how_it_works' ) : ?>
			<?php get_template_part( 'inc/page-modules/how_it_works'); ?>
		<?php elseif ( get_row_layout() == 'bulleted_list_two_column' ) : ?>
			<?php get_template_part( 'inc/page-modules/bulleted_list_two_column'); ?>
		<?php elseif ( get_row_layout() == 'footer_cta' ) : ?>
			<?php get_template_part('inc/cta_footer_water');?>
		<?php elseif ( get_row_layout() == 'basic_text_box' ) : ?>
			<?php get_template_part('inc/page-modules/basic_text_box');?>
		<?php elseif ( get_row_layout() == 'support_logos' ) : ?>
			<?php get_template_part('inc/page-modules/support_logos');?>
		<?php elseif ( get_row_layout() == 'request_a_quote' ) : ?>
			<?php get_template_part('inc/page-modules/request_a_quote'); ?>
		<?php elseif ( get_row_layout() == 'our_products' ) : ?>
			<?php get_template_part('inc/page-modules/our_products'); ?>
		<?php elseif ( get_row_layout() == 'get_in_touch' ) : ?>
			<?php get_template_part('inc/page-modules/get_in_touch'); ?>
		<?php elseif ( get_row_layout() == 'get_in_touch_2' ) : ?>
			<?php get_template_part('inc/page-modules/get_in_touch_2'); ?>
		<?php elseif ( get_row_layout() == 'testimonials' ) : ?>
			<?php get_template_part('inc/page-modules/testimonials'); ?>
		<?php elseif ( get_row_layout() == 'testimonials_masonry' ) : ?>
			<?php get_template_part('inc/page-modules/testimonials_masonry'); ?>
		<?php elseif ( get_row_layout() == 'testimonials_carousel' ) : ?>
			<?php get_template_part('inc/page-modules/testimonials_carousel'); ?>
		<?php elseif ( get_row_layout() == 'text_and_image' ) : ?>
			<?php get_template_part('inc/page-modules/text_and_image'); ?>
		<?php elseif ( get_row_layout() == 'table' ) : ?>
			<?php get_template_part('inc/page-modules/table'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>



<!-- // If has no page_modules then show default -->
<?php if (!have_rows( 'page_modules' )): ?>
	<div class="full">
		<div class="content default_page">
			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post();?>
					<h1><?php the_title();?></h1>
					<?php the_content();?>
				<?php endwhile;?>
				<?php wp_reset_postdata();?>
			<?php endif;?>
		</div> <!-- content -->
	</div> <!-- full -->
<?php endif;?>
