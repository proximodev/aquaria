<div class="hero_wrapper">
	<div class="section_hero_wrapper_inner">
		<div class="section_hero_wrapper_inner_left">
			<?php if ( have_rows( 'text_block' ) ) : ?>
				<?php while ( have_rows( 'text_block' ) ) : the_row(); ?>
					<h1><?php the_sub_field( 'title' ); ?></h1>
					<h5><?php the_sub_field( 'text' ); ?></h5>
					<?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) : ?>
						<a class="big_btn" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div> <!-- section_hero_wrapper_inner_left -->
		<div class="section_hero_wrapper_inner_right">
			<?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
		</div>
	</div> <!-- section_hero_wrapper_inner -->
</div> <!-- hero_wrapper -->