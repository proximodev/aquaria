<?php
/*
* Template Name: (General)
*/
get_header(); ?>

<main id="primary" class="site-main">


	<div class="full">
		<div class="content section_style_wrapper">
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