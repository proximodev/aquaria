<div class="full">
	<div class="section_cta_video-background">
		<video autoplay muted loop playsinline>
			<source src="https://aquaria.world/wp-content/uploads/2025/01/Video-for-homepage-new.mp4" type="video/mp4">
			</video>
			<div class="hero_video_bg_cta-text">

				<h1 class="_halfmargin white"><?php the_sub_field( 'title' ); ?></h1>

				<div class="hero_video_bg_cta-text_bottom">

					<div class="section_sales_points_wrapper">
						<?php if ( have_rows( 'sales_points' ) ) : ?>
							<?php while ( have_rows( 'sales_points' ) ) : the_row(); ?>
								<div class="secion_sales_point_item">
									<?php $image = get_sub_field( 'image' ); ?>
									<?php if ( $image ) : ?>
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									<?php endif; ?>
									<p class="s b nomargin white"><?php the_sub_field( 'text' ); ?></p>
								</div> <!-- secion_sales_point_item -->
							<?php endwhile; ?>
						<?php endif; ?>
					</div> <!-- section_sales_points_wrapper -->
					<div class="section_home_hero_btn">
						<?php $link = get_sub_field( 'link' ); ?>
						<?php if ( $link ) : ?>
							<a class="btn white noborder right_arrow" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
						<?php endif; ?>
						<a class="btn white_reversed video_btn video modal-vimeo" data-video-id="<?php the_sub_field( 'popup_video' ); ?>"> <?php the_sub_field( 'popup_video_text' ); ?></a>
					</div>
				</div> <!-- hero_video_bg_cta -->
			</div><!-- hero_bg_cta -->
		</div> <!-- section_cta_video -->
	</div>