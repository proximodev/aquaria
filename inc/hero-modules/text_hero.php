<div class="full">
	<div class="content">
		<div class="section_text_hero">
			<div class="section_block_title">
				<h1><?php the_sub_field( 'title' ); ?></h1>
				<p class="nomargin"><?php the_sub_field( 'text' ); ?></p>
			</div>
			<?php $link = get_sub_field( 'link' ); ?>
			<?php if ( $link ) : ?>
				<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
			<?php endif; ?>
		</div> <!-- section_text_hero -->
	</div> <!-- contact -->
</div> <!-- full -->