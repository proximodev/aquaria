<div class="full bgcolor-gray-light">
	<div class="content">
		<div class="section_faq_block <?php if ( get_sub_field( 'has_sidebar' ) == 1 ) : ?> has_sidebar <?php endif; ?>">
			<?php if ( get_sub_field( 'has_sidebar' ) == 1 ) : ?>
				<div class="section_faq_sidebar">
					<h2 class="nomargin"><?php the_sub_field( 'sidebar_title' ); ?></h2>
				</div>
			<?php endif; ?>
			<?php if ( get_sub_field( 'has_sidebar' ) == 0 ) : ?>
				<div class="section_faq_title">
					<h2 class="centertext"><?php the_sub_field( 'sidebar_title' ); ?></h2>
				</div>
			<?php endif; ?>
			<div class="accordion_faqs">  
				<?php if ( have_rows( 'faq' ) ) : ?>
					<?php while ( have_rows( 'faq' ) ) : the_row(); ?>
						<div class="accordion-title accordion-title_pad">
							<h4 class="nomargin">
								<?php the_sub_field( 'question' ); ?></h4> <i class="far fa-plus"></i>
							</div>
							<div class="accordion-content">
								<p><?php the_sub_field( 'anwser' ); ?></p>
							</div> <!-- accordion-content -->
						<?php endwhile; ?>
					<?php endif; ?>
				</div> <!-- add this closing tag -->
			</div> <!-- section_faq_block -->
		</div><!-- content -->
</div><!-- full -->