


<div class="full">
	<div class="content">



		<div class="section_2_column_product_details">
			<div class="section_block_title">
				<h3><?php the_sub_field( 'title' ); ?></h3>
			</div>
			<div class="section_2_column_product_details_inner">
				<div class="section_2_column_product_details_left">

					<?php if ( have_rows( 'image_block' ) ) : ?>
						<?php while ( have_rows( 'image_block' ) ) : the_row(); ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) : ?>
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							<?php endif; ?>
							<?php the_sub_field( 'text' ); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div> <!-- section_2_column_product_details_left -->


				<div class="section_2_column_product_details_right">
					<div class="section_faq_wrapper">
						<div class="accordion_faqs">  



							<?php if ( have_rows( 'bullets' ) ) : ?>
								<?php while ( have_rows( 'bullets' ) ) : the_row(); ?>
									<div class="accordion-title accordion-title_pad">
										<h4 class="nomargin">
											<?php $icon = get_sub_field( 'icon' ); ?>
											<?php if ( $icon ) : ?>
												<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
											<?php endif; ?>
											<?php the_sub_field( 'title' ); ?></h4> <i class="far fa-plus"></i>
										</div>
										<div class="accordion-content">
											<p><?php the_sub_field( 'text' ); ?></p>
										</div> <!-- accordion-content -->
									<?php endwhile; ?>
								<?php endif; ?>

							</div> <!-- loop_client_item -->
						</div> <!-- add this closing tag -->
					</div> <!-- section_faq_wrapper -->
				</div>
			</div> <!-- section_2_column_product_details_left -->


		</div> <!-- section_2_column_product_details -->






	</div> <!-- content -->
</div> <!-- full -->