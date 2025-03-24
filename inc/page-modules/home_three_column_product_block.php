<div class="full">
	<div class="content">
		<div class="section_home_3_column_product_block">
			<div class="section_block_title">
				<?php if ( have_rows( 'title_block' ) ) : ?>
					<?php while ( have_rows( 'title_block' ) ) : the_row(); ?>
						<h3><?php the_sub_field( 'title' ); ?></h3>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div id="section_home_3_column_product_block" class="section_home_3_column_product_block_inner">
				<?php if ( have_rows( 'column_one' ) ) : ?>
					<?php while ( have_rows( 'column_one' ) ) : the_row(); ?>
						<div class="section_home_3_column_product_block_inner_item">
							<div class="lottie-animation squiggle" data-animation-path="<?php echo get_stylesheet_directory_uri(); ?>/imgs/lottie/<?php the_sub_field( 'json_image_file' ); ?>"></div>
							<p class="nomargin"><?php the_sub_field( 'text' ); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'column_two' ) ) : ?>
					<?php while ( have_rows( 'column_two' ) ) : the_row(); ?>
						<?php $product_image = get_sub_field( 'product_image' ); ?>
						<?php if ( $product_image ) : ?>
							<div class="section_home_3_column_product_block_inner_item" style="background-image: url('<?php echo esc_url( $product_image['url'] ); ?>'); background-position: center top; background-repeat: no-repeat; background-size: contain;">
							<?php endif; ?>
							<div class="lottie-animation squiggle" data-animation-path="<?php echo get_stylesheet_directory_uri(); ?>/imgs/lottie/<?php the_sub_field( 'json_image_file' ); ?>"></div>
							<p class="white nomargin"><?php the_sub_field( 'text' ); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<div class="section_home_3_column_product_block_inner_item">
					<?php if ( have_rows( 'column_three' ) ) : ?>
						<?php while ( have_rows( 'column_three' ) ) : the_row(); ?>
							<div class="lottie-animation squiggle" data-animation-path="<?php echo get_stylesheet_directory_uri(); ?>/imgs/lottie/<?php the_sub_field( 'json_image_file' ); ?>"></div>
							<p class="nomargin"><?php the_sub_field( 'text' ); ?></p>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div> <!-- section_home_3_column_product_block -->
	</div> <!-- content -->
</div> <!-- full -->