<div class="full">
	<div class="content">
		<div class="section_home_checkbox_list">
			<div class="section_block_title">
				<?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
				<?php the_sub_field( 'section_title' ); ?>
			</div>
			<div class="section_home_checkbox_list_inner">
				<?php if ( have_rows( 'list_item' ) ) : ?>
					<ul class="circle_check">
						<?php while ( have_rows( 'list_item' ) ) : the_row(); ?>
							<?php $bullet_image = get_sub_field( 'bullet_image' ); ?>
							<li>
								<img src="<?php echo esc_url( $bullet_image['url'] ); ?>" alt="<?php echo esc_attr( $bullet_image['alt'] ); ?>" />
								<?php the_sub_field( 'text' ); ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div> <!-- content -->
</div> <!-- full -->