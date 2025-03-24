<div class="full">
	<div class="content">
		<div class="grid-container">
			<?php if ( have_rows( 'grid_box_one' ) ) : ?>
				<?php while ( have_rows( 'grid_box_one' ) ) : the_row(); ?>
					<?php $image = get_sub_field( 'image' ); ?>
					<div class="left-column grid_box <?php the_sub_field( 'background_color' ); ?>" style="background: url('<?php echo esc_url( $image['url'] ); ?>') no-repeat center center; background-size: cover;">
						<h4 class="center nomargin"><?php the_sub_field( 'title' ); ?></h4>
					</div><!-- Closing left-column div -->
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="right-column">
				<?php if ( have_rows( 'grid_box_two' ) ) : ?>
					<?php while ( have_rows( 'grid_box_two' ) ) : the_row(); ?>
						<?php $image = get_sub_field( 'image' ); ?>
						<div class="right-column-image grid_box <?php the_sub_field( 'background_color' ); ?>" style="background: url('<?php echo esc_url( $image['url'] ); ?>') no-repeat center bottom; background-size: cover;">
							<div class="grid_item_text">
								<h4 class="center white nomargin"><?php the_sub_field( 'title' ); ?></h4>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'grid_box_three' ) ) : ?>
					<?php while ( have_rows( 'grid_box_three' ) ) : the_row(); ?>
						
						<?php $image = get_sub_field('image'); if ($image) {?>
							<div class="right-column-image grid_box <?php the_sub_field( 'background_color' ); ?>" style="background: url('<?php echo esc_url( $image['url'] ); ?>') no-repeat center center; background-size: cover;">
								<div class="grid_item_text">
									<h4 class="center white nomargin"><?php the_sub_field( 'title' ); ?></h4>
								</div>
							</div>
						<?php } ?>
						<?php $video = get_sub_field('video'); if ($video) {?> 
							<div class="right-column-video grid_box">
								<video playsinline muted autoplay loop> <source src="<?php the_sub_field('video'); ?>" type="video/mp4"> </video> 
									<div class="grid_item_text">
										<h4 class="center white nomargin"><?php the_sub_field('title'); ?></h4>
									</div>
								</div>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- Closing right-column div -->
			</div><!-- Closing grid-container div -->
		</div><!-- Closing content div -->
	</div><!-- Closing full div -->