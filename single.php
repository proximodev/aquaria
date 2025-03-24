<?php get_header(); ?>
<main id="primary" class="site-main">
	<div class="full">
		<div class="content">
			<div class="section_post_single_title">
				<h1 class="nomargin"><?php the_title();?></h1>
			</div>
			<div class="section_post_single_wrapper">
				<div class="section_post_single_sidebar_content">

					<div class="sticky_header">
						<h5 class="small"><?php the_title();?></h5>
					</div>


					<p class="halfmargin">
						<span><?php the_time('F j, Y') ?></span> | 
						<span>   <?php echo do_shortcode('[rt_reading_time postfix="minute read"]'); ?></span> 
					</p>
					<div class="section_single_post_category_wrapper">
						<?php
						$categories = get_the_category();
						foreach ($categories as $category) {
							$category_class = 'category-' . $category->slug;
							echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="' . esc_attr($category_class) . ' btn gray category_link">' . esc_html($category->name) . '</a>';
						}
						?>
					</div> <!-- section_single_post_category_wrapper -->
					<?php get_template_part('inc/social_share');?>
				</div> <!-- section_post_single_sidebar_content -->


				<div class="section_post_single_main_content">
					<?php if (have_posts()): ?>
						<?php while (have_posts()): the_post();?>
							<div class="section_news_hero_img">
								<?php if (has_post_thumbnail())  {?>
									<?php the_post_thumbnail( 'featured-image' ); ?>
								<?php } else {?>
									<img src="https://dummyimage.com/600x400/47CF63/47CF63" alt=""> 
								<?php }?>       
							</div> <!-- section-loop-blog_img -->
							<div class="section_single_content">
								<div class="rte">
									<?php the_content();?>
								</div>
							</div> <!-- section-blog-post -->
						</div> <!-- section_single_content -->
					</div> <!-- section_post_single_main_content -->
					<?php wp_reset_postdata();?>
				<?php endwhile;?>
			<?php endif;?>
		</div> <!-- section_post_single_wrapper -->
	</div><!-- content -->
</div><!-- full -->


<div class="full bgcolor-gray-light">
	<div class="content">
		<?php
		$category = get_the_category();
		$category_id = $category[0]->cat_ID;
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'cat' => $category_id,
			'post__not_in' => array(get_the_ID())
		);
		$related_posts = new WP_Query( $args ); ?>
		<div class="section_related_posts">
			<div class="section_related_posts_title">
				<h4>Similar Articles</h4>
			</div> <!-- section_related_posts_title -->
			<?php if ($related_posts->have_posts()) : ?>
				<div class="section_news_wrapper">
					<?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
						<?php get_template_part('inc/loops/loop-news');?>
						<?php wp_reset_postdata();?>
					<?php endwhile;?>
				</div>
			<?php endif;?>

			<div class="section_all_btn_wrapper">
				<a class="btn black nomargin" href="/blog">All Articles</a>
			</div> <!-- section_all_btn_wrapper -->

			
		</div> <!-- section_projects_wrapper -->
	</div> <!-- content -->
</div> <!--full-->



</div> <!-- main.site-main -->
<?php get_footer();?>
