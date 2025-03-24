<div class="full">
	<div class="content">
		<div class="section_home_installations_module">
			<div class="section_home_installations_module_left">
				<?php if ( have_rows( 'text_group' ) ) : ?>
					<?php while ( have_rows( 'text_group' ) ) : the_row(); ?>
						<h3><?php the_sub_field( 'title' ); ?></h3>
						<p><?php the_sub_field( 'text' ); ?></p>
						<?php if ( have_rows( 'bulleted_image' ) ) : ?>
							<ul>
								<?php while ( have_rows( 'bulleted_image' ) ) : the_row(); ?>
									<li>	
										<?php the_sub_field( 'text' ); ?>
										<?php $icon = get_sub_field( 'icon' ); ?>
										<?php if ( $icon ) : ?>
											<img class="bullet_icon" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
										<?php endif; ?>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						<div class="text-and-image-navigation">
							<?php $button = get_sub_field( 'button' ); ?>
						    <?php if ( $button ) : ?>
						    <a class="btn huge arrow" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>">
						        <?php echo esc_html( $button['title'] ); ?> <i class="fa-regular fa-arrow-right inherit"></i>
						    </a>
						    <?php endif; ?>
						    <?php $button_secondary = get_sub_field( 'button_secondary' ); ?>
						    <?php if ( $button_secondary ) : ?>
						    <a class="btn huge arrow reversed" href="<?php echo esc_url( $button_secondary['url'] ); ?>" target="<?php echo esc_attr( $button_secondary['target'] ); ?>">
						        <?php echo esc_html( $button_secondary['title'] ); ?> <i class="fa-regular fa-arrow-right inherit"></i>
						    </a>
						    <?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div> <!-- section_home_installations_module_left -->
			<div class="section_home_installations_module_right">
				<?php $image_home = get_sub_field( 'image_home' ); ?>
				<?php if ( $image_home ) : ?>
					<img src="<?php echo esc_url( $image_home['url'] ); ?>" alt="<?php echo esc_attr( $image_home['alt'] ); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div><!-- Closing content div -->
</div><!-- Closing full div -->
