<div class="full">
	<div class="content">
		<div class="section_support_logos">
			<div class="section_title_wrapper">
				<p class="b"><?php the_sub_field( 'section_title' ); ?></p>
			</div>
			<?php if ( have_rows( 'logos' ) ) : ?>
				<div class="section_support_logos_wrapper">
					<?php while ( have_rows( 'logos' ) ) : the_row(); ?>
						<?php $logo = get_sub_field( 'logo' ); ?>
						<?php if ( $logo ) : ?>
							<div class="section_support_logos_item">
								<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
							</div> <!-- section_support_logos_item -->
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div> <!-- section_how_it_works_block -->
	</div><!-- Closing content div -->
</div><!-- Closing full div -->