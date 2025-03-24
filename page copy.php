<?php get_header(); ?>
<main id="primary" class="site-main">


	

	<?php get_template_part('inc/hero-modules/hero_bg_image');?>
	<?php get_template_part('inc/hero-modules/hero_home_video_bg');?>
	<?php get_template_part('inc/page-modules/grid_blocks_3');?>
	<?php get_template_part('inc/page-modules/grid_blocks_4');?>



	<div class="full">
		<div class="content default_page">
			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post();?>
					<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php wp_reset_postdata();?>
				<?php endwhile;?>
			</div> <!-- section_news_wrapper -->
		<?php endif;?>
	</div> <!-- content -->
</div> <!-- full -->
</main><!-- #main -->



<?php get_footer(); ?>