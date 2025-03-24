<div class="list-container">
	<button class="more-button" aria-label="Menu Button">
		<div class="menu-icon-wrapper">
			<div class="menu-icon-line half first"></div>
			<div class="menu-icon-line"></div>
			<div class="menu-icon-line half last"></div>
		</div>
	</button>
	<ul class="more-button-list">
		<?php if ( have_rows( 'menu_items', 'option' ) ) : ?>
			<?php while ( have_rows( 'menu_items', 'option' ) ) : the_row(); ?>
				<?php if ( get_sub_field( 'has_dropdown' ) == 1 ) : ?>
					<li class="has_dropdown">
						<p class="white nomargin"><?php the_sub_field( 'menu_title' ); ?></p>
						<?php if ( have_rows( 'dropdown_menu_column' ) ) : ?>
							<?php while ( have_rows( 'dropdown_menu_column' ) ) : the_row(); ?>
								<div class="dropdown-panel-column-title"><?php the_sub_field( 'title' ); ?></div>
								<?php if ( have_rows( 'links' ) ) : ?>
								<ul>
									<?php while ( have_rows( 'links' ) ) : the_row(); ?>
										<?php $link = get_sub_field( 'link' ); ?>
										<?php if ( $link ) : ?>
											<li><a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo $link['title']; ?><i class="fa-light fa-chevron-right"></i></a></li>
										<?php endif; ?>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</li>
				<?php else : ?>
					<li class="more-button-list-item">
						<?php $link = get_sub_field( 'link' ); ?>
						<?php if ( $link ) : ?>
							<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
						<?php endif; ?>
					</li>
				<?php endif; // has_dropdown ?>
			<?php endwhile; // have_rows( 'menu_items' ?>
		<?php endif; // have_rows( 'menu_items ?>
	</ul> <!-- more-button-list -->
</div> <!-- list-container -->