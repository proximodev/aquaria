<div class="full">
	<div class="content">
		<div class="section_how_it_works_block">
			<?php if ( have_rows( 'how_it_works' ) ) : ?>
				<?php while ( have_rows( 'how_it_works' ) ) : the_row(); ?>
					<div class="section_how_it_works_block_item">
						<div class="section_how_it_works_block_item_text">
							<div class="number"><h5 class="nomargin"><?php the_sub_field( 'number' ); ?></h5></div>
							<h2 class="halfmargin"><?php the_sub_field( 'title' ); ?></h2>
							<p><?php the_sub_field( 'text' ); ?></p>
						</div>
						<div class="how_it_works_img">
							<video autoplay muted loop playsinline> <source src="<?php the_sub_field('video'); ?>" type="video/mp4"> </video> 
							</div>
							<!-- <_?php $image = get_sub_field( 'image' ); ?>
							<_?php if ( $image ) : ?>
								<div class="how_it_works_img">
									<img src="<_?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								</div>
								<_?php endif; ?> -->
								</div> <!-- how_it_works_img -->
							<?php endwhile; ?>
						<?php endif; ?>
					</div> <!-- section_how_it_works_block -->
				</div><!-- Closing content div -->
</div><!-- Closing full div -->