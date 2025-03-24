<div class="full">
	<div class="content">
		<div class="product_image_bullets">
			<div class="section_block_title">
				<h3 class="centertext"><?php the_sub_field( 'title' ); ?></h3>
			</div>
			<div class="product_image_bullets_inner">
				<div class="product_image_bullets_inner_left">
					<?php if ( have_rows( 'image_block' ) ) : ?>
						<?php while ( have_rows( 'image_block' ) ) : the_row(); ?>
							<div class="product_image_bullets_inner_left_image">
								<?php $image = get_sub_field( 'image' ); ?>
								<?php if ( $image ) : ?>
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								<?php endif; ?>
								<?php if ( get_sub_field( 'text' ) ) : ?>
								<div class="section_product_text_circle">
									<?php the_sub_field( 'text' ); ?>
								</div> <!-- section_product_text_circle -->
								<?php endif; ?>
							</div> <!-- product_image_bullets_inner_left_image -->
						<?php endwhile; ?>
					<?php endif; ?>
				</div> <!-- product_image_bullets_inner_left -->
				<div class="product_image_bullets_inner_right">
					<?php if ( have_rows( 'bullets' ) ) : ?>
						<ul class="product_image_bullets_inner_right_ul">
							<?php while ( have_rows( 'bullets' ) ) : the_row(); ?>
								<?php $icon = get_sub_field( 'icon' ); ?>
								<li>
									<?php if ( $icon ) : ?>
										<img class="bullet_icon" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
									<?php endif; ?>
									<h4 class="nomargin"><?php the_sub_field( 'title' ); ?></h4>
									<p><?php the_sub_field( 'text' ); ?></p>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div> <!-- product_image_bullets_inner_right -->
			</div>
		</div>
	</div><!-- Closing content div -->
</div><!-- Closing full div -->
