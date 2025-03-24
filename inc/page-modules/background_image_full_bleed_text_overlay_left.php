<div class="full">
	<div class="background_image_text_overlay video">
		<video autoplay muted loop playsinline>
			<source src="<?php the_sub_field( 'video' ); ?>" type="video/mp4">
			</video>
			<div class="background_image_text_overlay_gradient"></div>
			<div class="background_image_text_overlay_text background_image_left_text">
				<h2 class="halfmargin white"><?php the_sub_field( 'title' ); ?></h2>
				<p  class="halfmargin white"><?php the_sub_field( 'text' ); ?></p>
				<?php if ( have_rows( 'stat_block' ) ) : ?>
					<div class="background_image_stats_wrapper">
						<?php while ( have_rows( 'stat_block' ) ) : the_row(); ?>
							<div class="background_image_stats_wrapper_item">
								<h2 class="white halfmargin"><?php the_sub_field( 'title' ); ?></h2>
								<p class="white nomargin"><?php the_sub_field( 'text' ); ?></p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div> <!-- background_image_text_overlay_text -->
		</div> <!-- footer_cta_cta -->
	</div> <!-- footer_cta_video -->
</div><!-- Closing full div -->
