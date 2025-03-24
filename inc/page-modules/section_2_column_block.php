<?php if (get_sub_field('background_color') == 'bgcolor-black') {$variable = 'white'; } ?>
<div class="full <?php the_sub_field( 'background_color' ); ?>  <?php echo $variable; ?> <?php the_sub_field( 'layout' ); ?>">
	<div class="content">
		<div class="section_2_column_block">
			<?php $video = get_sub_field('video'); if ($video) {?> 
				<div class="section_2_column_block_item block_item_video">
					<video autoplay muted loop playsinline>
						<source src="<?php the_sub_field('video'); ?>" type="video/mp4">
						</video>
					</div><!-- section_2_column_block_item block_item_video -->
				<?php } ?> 
				<?php $image = get_sub_field('image'); if ($image) {?> 
					<div class="section_2_column_block_item block_item_img">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div><!-- section_2_column_block_item block_item_img -->
				<?php } ?>
				<?php if ( have_rows( 'profile_one' ) ) : ?>
					<div class="section_2_column_block_item profile_img">
						<?php while ( have_rows( 'profile_one' ) ) : the_row(); ?>
							<div class="profile__item">
								<?php $profile_image = get_sub_field( 'profile_image' ); ?>
								<?php if ( $profile_image ) : ?>
									<img src="<?php echo esc_url( $profile_image['url'] ); ?>" alt="<?php echo esc_attr( $profile_image['alt'] ); ?>" />
								<?php endif; ?>
								<h4 class="nomargin"><?php the_sub_field( 'name' ); ?></h4>
								<p><?php the_sub_field( 'title' ); ?></p>
							</div> <!-- profile__item -->
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<div class="section_2_column_block_item block_item_text">
					<?php the_sub_field( 'general_text' ); ?>
					<?php if ( have_rows( 'list_w_icons' ) ) : ?>
						<ul class="has_icon">
							<?php while ( have_rows( 'list_w_icons' ) ) : the_row(); ?>
								<li>
									<?php $image = get_sub_field( 'image' ); ?>
									<?php if ( $image ) : ?>
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									<?php endif; ?>
									<?php the_sub_field( 'text' ); ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div> <!-- section_2_column_block_item -->
			</div> <!-- section_2_column_block -->
		</div> <!-- content -->
	</div> <!-- full -->
