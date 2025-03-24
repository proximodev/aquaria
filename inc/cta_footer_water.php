<?php if ( have_rows( 'footer_cta', 'option' ) ) : ?>
	<?php while ( have_rows( 'footer_cta', 'option' ) ) : the_row(); ?>
		<div class="footer_cta_video-background">
			<video autoplay muted loop playsinline>
				<source src="<?php the_sub_field( 'background_video' ); ?>" type="video/mp4">
				</video>
				<!-- <div class="footer_cta_gradient-overlay"></div> -->
				<div class="footer_cta_cta-text">
					<h2><?php the_sub_field( 'title' ); ?></h2>
					<h4><?php the_sub_field( 'text' ); ?></h4>
					<?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) : ?>
						<a class="btn green" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
					<?php endif; ?>
				</div> <!-- footer_cta_cta -->
			</div> <!-- footer_cta_video -->
		<?php endwhile; ?>
		<?php endif; ?>