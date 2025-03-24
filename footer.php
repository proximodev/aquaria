<footer id="footer colophon" class="site-footer">
	<div class="content">
		<div class="section_footer_inner">
			<div class="section_footer_column_one">
				<?php get_template_part('imgs/aquaria_logo-white.svg');?>
				<?php
					the_field('footer_text', 'option');
				?>
			</div> <!-- section_footer_column_one -->
			<div class="section_footer_column_two">
				<?php if ( have_rows( 'footer_links', 'option' ) ) : ?>
					<ul class="footer_ul">
						<?php while ( have_rows( 'footer_links', 'option' ) ) : the_row(); ?>
							<?php $page_link = get_sub_field( 'page_link' ); ?>
							<?php if ( $page_link ) : ?>
								<a href="<?php echo esc_url( $page_link['url'] ); ?>" target="<?php echo esc_attr( $page_link['target'] ); ?>"><li><?php echo esc_html( $page_link['title'] ); ?></li></a>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php if ( have_rows( 'footer_links_column_two', 'option' ) ) : ?>
					<ul class="footer_ul">
						<?php while ( have_rows( 'footer_links_column_two', 'option' ) ) : the_row(); ?>
							<?php $page_link = get_sub_field( 'page_link' ); ?>
							<?php if ( $page_link ) : ?>
								<a href="<?php echo esc_url( $page_link['url'] ); ?>" target="<?php echo esc_attr( $page_link['target'] ); ?>"><li><?php echo esc_html( $page_link['title'] ); ?></li></a>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div> <!-- section_footer_column_one -->
			<div class="section_footer_column_three">
				<h3 class="white quartermargin">Stay in touch</h3>
				<p class="s white halfmargin">Keep up to date with the latest educational resources around climate change, clean water, water security, and community resilience.</p>
				<?php $form_id = 2; gravity_form($form_id, false, false, false, '', true); ?>
			</div> <!-- section_footer_column_one -->
		</div><!-- section_footer_inner -->
	</div>
	<div class="section_footer_credits">
		<div class="section_footer_credits_links">
			<?php if ( have_rows( 'footer_credits', 'option' ) ) : ?>
				<p class="s white nomargin">
					<?php while ( have_rows( 'footer_credits', 'option' ) ) : the_row(); ?>
						<?php $link = get_sub_field( 'link' ); ?>
						<?php if ( $link ) : ?>
							<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
					&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.
				</p>
			<?php endif; ?>
		</div> <!-- section_footer_credits_links -->
		<?php if ( have_rows( 'social_links', 'option' ) ) : ?>
			<ul class="section_footer_credits_socials">

				<?php echo do_shortcode('[gtranslate]'); ?>
				<?php while ( have_rows( 'social_links', 'option' ) ) : the_row(); ?>
					<?php $page_link = get_sub_field( 'page_link' ); ?>
					<?php $icon_class = get_sub_field( 'icon_class' ); ?>
					<?php if ( $page_link ) : ?>
						<li>
							<a href="<?php echo esc_url( $page_link['url'] ); ?>" target="<?php echo esc_attr( $page_link['target'] ); ?>">
								<i class="fa-brands <?php echo esc_attr( $icon_class ); ?>"></i>
							</a>
						</li>
					<?php endif; ?>
				<?php endwhile; ?>
			</ul> <!-- section_footer_credits_socials -->
		<?php endif; ?>
	</div> <!-- content section_footer_credits -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>