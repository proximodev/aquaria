<?php get_header(); ?>
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
	<?php get_template_part( 'inc/hero-modules/hero-modules'); ?>




<!-- 	<div class="second-section">
		<lottie-player id="firstLottie"src="https://assets2.lottiefiles.com/private_files/lf30_hhvn1H.json"> </lottie-player> 
	</div>


	<div class="lottie-animation squiggle" data-animation-path="<-?php echo get_stylesheet_directory_uri(); ?>/imgs/lottie/138573-loading-46.json"></div>
	<div class="lottie-animation squiggle" data-animation-path="<-?php echo get_stylesheet_directory_uri(); ?>/imgs/lottie/140905-loading-48-optimized.json"></div>

	-->


	<div class="page-modules-wrapper">
		<?php get_template_part( 'inc/page-modules/page-modules-list'); ?>
	</div> <!-- section-page-wrapper -->
</main><!-- #main -->
<?php get_footer(); ?>