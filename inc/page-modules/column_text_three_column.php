<div class="full bgcolor-black">
	<div class="content">
		<div class="column_text_three_column <?php the_sub_field( 'text_alignment' ); ?>">
			<div class="section_block_title">
				<h2 class="white"><?php the_sub_field( 'title' ); ?></h2>
			</div>
			<div class="column_text_three_column_inner">
				<?php if ( have_rows( 'column_text' ) ) : ?>
					<?php while ( have_rows( 'column_text' ) ) : the_row(); ?>
						<div class="column_text_three_column_item">
							<h4 class="white"><?php the_sub_field( 'title' ); ?></h4>
							<p class="white"><?php the_sub_field( 'text' ); ?></p>
						</div> <!-- column_text_three_column_item -->
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div> <!-- column_text_three_column -->
	</div><!-- Closing content div -->
</div><!-- Closing full div -->