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


	<?php if ( get_field( 'banner_status', 'option' ) == 1 ) : ?>
		<?php if ( have_rows( 'header_banner', 'option' ) ) : ?>
			<?php while ( have_rows( 'header_banner', 'option' ) ) : the_row(); ?>
				<div class="header_banner">
					<div class="section_banner_content">
						<?php the_sub_field( 'text' ); ?>
					</div>
					<span id="closeBtn"><i class="fa-sharp fa-regular fa-xmark"></i></span> <!-- Unicode for a cross mark -->
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; // end if banner enabled ?>


	<?php if (is_front_page()) { // only load on front-pate ?><?php } // (is_front_page ?>





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
		<header id="masthead" class="site-header <?php echo $header_style; ?> <?php echo $variable; ?>">
			<div class="logo_wrapper <?php echo $header_style; ?> <?php echo $variable; ?>">
				<a href="/"> <?php get_template_part('imgs/aquaria_logo.svg');?></a>
			</div>
			<div class="site-header-push"></div>
			<div class="navigation">
				<ul class="header_links">
					<?php if ( have_rows( 'menu_items', 'option' ) ) : ?>
						<?php while ( have_rows( 'menu_items', 'option' ) ) : the_row(); ?>
							<?php if ( get_sub_field( 'has_dropdown' ) == 1 ) : ?>
								<li class="has-dropdown">
									<a href="#"><?php the_sub_field( 'menu_title' ); ?></a>
									<?php if ( have_rows( 'dropdown_menu_column' ) ) : ?>
										<div class="dropdown-panel">
											<button class="dropdown-panel-close"><i class="fa-light fa-xmark"></i></button>
											<div class="dropdown-panel-columns">
												<?php while ( have_rows( 'dropdown_menu_column' ) ) : the_row(); ?>
													<div class="dropdown-panel-column">
														<div class="dropdown-panel-column-title"><?php the_sub_field( 'title' ); ?></div>
														<?php if ( have_rows( 'links' ) ) : ?>
														<ul>
															<?php while ( have_rows( 'links' ) ) : the_row(); ?>
																<?php $link = get_sub_field( 'link' ); ?>
																<?php if ( $link ) : ?>
																	<li><a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo $link['title']; ?><i class="fa-light fa-chevron-right"></i></a></li>
																<?php endif; ?>
															<?php endwhile; ?>
														</ul>
														<?php endif; ?>
													</div>
												<?php endwhile; ?>
											</div>
										</div>
									<?php endif; ?>
								</li>
							<?php else : ?>
								<?php $link = get_sub_field( 'link' ); ?>
								<?php if ( $link ) : ?>
									<li><a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo $link['title']; ?></a></li>
								<?php endif; ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<button class="header-call"><i class="fa-light fa-phone-volume"></i></button>
			<?php $cta_button_link = get_field( 'cta_button_link', 'option' ); ?>
			<?php if ( $cta_button_link ) : ?>
				<a class="btn" href="<?php echo esc_url( $cta_button_link['url'] ); ?>" target="<?php echo esc_attr( $cta_button_link['target'] ); ?>"><?php echo esc_html( $cta_button_link['title'] ); ?></a>
			<?php endif; ?>
			<?php get_template_part('inc/mobile-nav');?>
		</header><!-- #masthead -->

		<div class="modal-schedule-mask"></div>
		<div class="modal-schedule">
			<button class="modal-schedule-close"><i class="fa-light fa-xmark"></i></button>
			<div class="modal-schedule-title"><?php the_field( 'schedule_title', 'option' ); ?></div>
			<p><?php the_field( 'schedule_text', 'option' ); ?></p>
			<p><a class="modal-schedule-phone" href="tel:<?php the_field( 'schedule_phone', 'option' ); ?>"><span class="modal-schedule-icon"><i class="fa-light fa-phone-volume"></i></span><?php the_field( 'schedule_phone', 'option' ); ?></a></p>
			<div class="modal-schedule-title"><?php the_field( 'schedule_title_2', 'option' ); ?></div>
			<p><?php the_field( 'schedule_text_2', 'option' ); ?></p>
			<?php $schedule_button = get_field( 'schedule_button', 'option' ); ?>
			<?php if ( $schedule_button ) : ?>
				<a class="btn arrow" href="<?php echo esc_url( $schedule_button['url'] ); ?>" target="<?php echo esc_attr( $schedule_button['target'] ); ?>"><?php echo esc_html( $schedule_button['title'] ); ?><i class="fa-regular fa-arrow-right inherit"></i></a>
			<?php endif; ?>
		</div>