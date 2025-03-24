<div class="full bgcolor-gray-light module_spacing_top-padding-40 module_spacing_bottom-padding-40">
	<div class="content">
		<div class="section_3_column_cta_boxes">
			<div class="section_block_title">
				<?php the_sub_field( 'section_title' ); ?>
			</div>
			<div class="section_3_column_cta_boxes_inner">
				<?php if ( have_rows( 'card' ) ) : ?>
					<?php while ( have_rows( 'card' ) ) : the_row(); ?>
						<?php $link = get_sub_field( 'link' ); ?>
						<a  class="section_3_column_cta_boxes_item" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) : ?>
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							<?php endif; ?>
							<div class="section_3_column_cta_boxes_item_text">
								<h4 class="halfmargin"><?php the_sub_field( 'title' ); ?></h4>
								<p class="nomargin">	<?php the_sub_field( 'text' ); ?></p>
							</div> <!-- section_3_column_cta_boxes_item_text -->
						</a> <!-- section_3_column_cta_boxes_item -->
					<?php endwhile; ?>
				<?php endif; ?>
			</div> <!-- section_3_column_cta_boxes_inner -->
		</div> <!-- section_3_column_cta_boxes -->
	</div> <!-- content -->
</div> <!-- full -->