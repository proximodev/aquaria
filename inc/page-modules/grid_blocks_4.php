<div class="full">
	<div class="content">
		<div class="grid-container-four">
			<?php if ( have_rows( 'grid_box_one' ) ) : ?>
				<?php while ( have_rows( 'grid_box_one' ) ) : the_row(); ?>
					<?php $image = get_sub_field( 'image' ); ?>
					<?php $icon = get_sub_field( 'icon' ); ?>
					<div class="left-column-1 grid_box <?php the_sub_field( 'background_color' ); ?>" style="background: url('<?php echo esc_url( $image['url'] ); ?>') no-repeat center center; background-size: cover;">
						<div class="grid_item_text grid_item_text_left">
							<?php if ( $icon ) : ?>
								<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
							<?php endif; ?>
							<h3 class="halfmargin"><?php the_sub_field( 'title' ); ?></h3>
							<p class="nomargin"><?php the_sub_field( 'description' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'grid_box_two' ) ) : ?>
				<?php while ( have_rows( 'grid_box_two' ) ) : the_row(); ?>
					<?php $image = get_sub_field( 'image' ); ?>
					<div class="left-column-1 grid_box <?php the_sub_field( 'background_color' ); ?>" style="background: url('<?php echo esc_url( $image['url'] ); ?>') no-repeat center center; background-size: cover;">
						<?php $icon = get_sub_field( 'icon' ); ?>
						<div class="grid_item_text grid_item_text_left">
							<?php if ( $icon ) : ?>
								<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
							<?php endif; ?>
							<h3 class="halfmargin"><?php the_sub_field( 'title' ); ?></h3>
							<p class="nomargin"><?php the_sub_field( 'description' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'grid_box_three' ) ) : ?>
				<?php while ( have_rows( 'grid_box_three' ) ) : the_row(); ?>
					<?php $image = get_sub_field( 'image' ); ?>
					<div class="left-column-1 grid_box <?php the_sub_field( 'background_color' ); ?>" style="background: url('<?php echo esc_url( $image['url'] ); ?>') no-repeat center center; background-size: cover;">
						<div class="grid_item_text grid_item_text_left">
							<?php $icon = get_sub_field( 'icon' ); ?>
							<?php if ( $icon ) : ?>
								<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
							<?php endif; ?>
							<h3 class="halfmargin"><?php the_sub_field( 'title' ); ?></h3>
							<p class="nomargin"><?php the_sub_field( 'description' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'grid_box_four' ) ) : ?>
				<?php while ( have_rows( 'grid_box_four' ) ) : the_row(); ?>
					


					<?php $image = get_sub_field('image'); if ($image) {?>
						<div class="left-column-1 grid_box <?php the_sub_field( 'background_color' ); ?>" style="background: url('<?php echo esc_url( $image['url'] ); ?>') no-repeat center center; background-size: cover;">
							<?php $icon = get_sub_field( 'icon' ); ?>
							<div class="grid_item_text grid_item_text_left">
								<?php if ( $icon ) : ?>
									<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
								<?php endif; ?>
								<h3 class="halfmargin"><?php the_sub_field( 'title' ); ?></h3>
								<p class="nomargin"><?php the_sub_field( 'description' ); ?></p>
							</div>
						</div>
					<?php } ?>
					<?php $video = get_sub_field('video'); if ($video) {?> 
						<div class="left-column-1_video grid_box <?php the_sub_field( 'background_color' ); ?>">
							<?php $icon = get_sub_field( 'icon' ); ?>
							<video playsinline muted autoplay loop id="vid"> 
								<source src="<?php the_sub_field('video'); ?>" type="video/mp4"> 
								</video> 

								<script>
									document.getElementById('vid').play();
								</script>
								<div class="grid_item_text grid_item_text_left">
									<?php if ( $icon ) : ?>
										<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
									<?php endif; ?>
									<h3 class="halfmargin"><?php the_sub_field( 'title' ); ?></h3>
									<p class="nomargin"><?php the_sub_field( 'description' ); ?></p>
								</div>
							</div>
						<?php } ?>
					</div>




				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div><!-- Closing content div -->


	<div class="section_statistics_block_footnote_grid">
		<p class="nomargin centertext s"><?php the_sub_field( 'footnote' ); ?></p>
	</div> <!-- section_statistics_block_footnote -->
</div><!-- Closing full div -->