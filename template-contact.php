<?php
/*
* Template Name: (Contact)
*/
get_header(); ?>
<main id="primary" class="site-main">
	<div class="full">
		<div class="content section_contact_wrapper">
			<div class="section_contact_sidebar">
				<h1 class="smallh1"><?php the_title();?></h1>
				<?php if ( have_rows( 'sidebar' ) ) : ?>
					<?php while ( have_rows( 'sidebar' ) ) : the_row(); ?>
						<p>	<?php the_sub_field( 'phone' ); ?></p>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'social_links', 'option' ) ) : ?>
					<ul class="sidebar_socials">
						<?php while ( have_rows( 'social_links', 'option' ) ) : the_row(); ?>
							<?php $page_link = get_sub_field( 'page_link' ); ?>
							<?php $icon_class = get_sub_field( 'icon_class' ); ?>
							<?php if ( $page_link ) : ?>
								<li>
									<a href="<?php echo esc_url( $page_link['url'] ); ?>" target="<?php echo esc_attr( $page_link['target'] ); ?>">
										<i class="fa-brands <?php echo esc_attr( $icon_class ); ?>"></i>
									</a>
								</li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="section_contact_main">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post();?>
						<?php the_content();?>
						<?php the_field( 'contact_form' ); ?>
						<?php wp_reset_postdata();?>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		</div> <!-- section_contact_wrapper -->
	</div> <!-- full -->
</main><!-- #main -->
<?php get_footer(); ?>