<div class="full bgcolor-gray-light">
	<div class="content">
		<div class="section_statistics_block">
			<div class="section_statistics_block_item">
				<?php the_sub_field( 'text_block_one' ); ?>
			</div>
			<div class="section_statistics_block_item">
				<?php if ( have_rows( 'text_block_two' ) ) : ?>
					<?php while ( have_rows( 'text_block_two' ) ) : the_row(); ?>
						<h2 class="halfmargin"><?php the_sub_field( 'stat' ); ?></h2>
						<p><?php the_sub_field( 'text' ); ?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="section_statistics_block_item">
				<?php if ( have_rows( 'text_block_three' ) ) : ?>
					<?php while ( have_rows( 'text_block_three' ) ) : the_row(); ?>
						<h2 class="halfmargin"><?php the_sub_field( 'stat' ); ?></h2>
						<p><?php the_sub_field( 'text' ); ?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="section_statistics_block_footnote">
				<p class="nomargin centertext s"><?php the_sub_field( 'footnote' ); ?></p>
			</div> <!-- section_statistics_block_footnote -->
		</div> <!-- section_statistics_block -->
	</div><!-- Closing content div -->
</div><!-- Closing full div -->