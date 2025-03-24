<div class="full">
	<div class="content">
		<div class="section_bullet_list_three_column">
			<?php if ( have_rows( 'bulleted_item' ) ) : ?>
				<ul>
					<?php while ( have_rows( 'bulleted_item' ) ) : the_row(); ?>
						<li>
							<h5><?php the_sub_field( 'text' ); ?></h5>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) : ?>
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div> <!-- section_bullet_list_three_column -->
	</div><!-- content -->
</div><!-- full -->