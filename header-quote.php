<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Title tag handled by SEO plugin -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	// Retrieve the ACF variable if set on the page 
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
	<?php 
	// Look at functions to see if there is a custom variable set such as is_home() || is_archive() || is_single() ) {
	// If so echo it below in the header and logo wrapper
	global $variable; ?>
	<header id="masthead" class="site-header quote_header <?php echo $header_style; ?> <?php echo $variable; ?>">
		<div class="logo_wrapper <?php echo $header_style; ?> <?php echo $variable; ?>">
			<a href="/"> <?php get_template_part('imgs/aquaria_logo.svg');?></a>
		</div>
		<?php get_template_part('inc/mobile-nav');?>
	</header><!-- #masthead -->