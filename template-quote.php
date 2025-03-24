<?php
/*
* Template Name: (Quote)
*/
get_header('quote'); ?>


<?php
$header_style = ''; 
if ( have_rows( 'header' ) ) :
	while ( have_rows( 'header' ) ) :
		the_row();
		$header_style = get_sub_field( 'header_style' );
		?>
		<?php
	endwhile;
endif;
?>

<?php global $variable; ?>



<main id="primary" class="site-main <?php echo $header_style; ?> <?php echo $variable; ?>">
	<div class="full">
		<div class="content-full section_quote_wrapper">
			<div class="section_quote_sidebar bgcolor-gray-light">
				<?php $sidebar_image = get_field( 'sidebar_image' ); ?>
				<?php if ( $sidebar_image ) : ?>
					<img src="<?php echo esc_url( $sidebar_image['url'] ); ?>" alt="<?php echo esc_attr( $sidebar_image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="section_quote_main">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post();?>
						<h1 class="halfmargin smallh1"><?php the_title();?></h1>
						<?php the_field( 'quote_form' ); ?>
						<?php wp_reset_postdata();?>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		</div> <!-- section_quote_wrapper -->
	</div> <!-- full -->
</main><!-- #main -->
<?php get_footer(); ?>