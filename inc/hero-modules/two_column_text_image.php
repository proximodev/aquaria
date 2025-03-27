<?php
$layoutStyle = get_sub_field('layout_style');
$buttonColor = get_sub_field('button_color');
$backgroundColor = get_sub_field('background_color');

if (!$layoutStyle) {
    $layoutStyle = "default";
}
if ($layoutStyle == "home") {
    $noMarginCSS = "no-margin";
} else {
    $noMarginCSS = "default";
}

if (!$layoutStyle) { $layoutStyle = "default"; }
if (!$backgroundColor) { $backgroundColor = "default"; }

?>
<div class="hero_wrapper <?= $layoutStyle; ?>">
	<div class="section_hero_wrapper_inner <?= $noMarginCSS; ?>">
		<div class="section_hero_wrapper_inner_left">
			<?php if ( have_rows( 'text_block' ) ) : ?>
				<?php while ( have_rows( 'text_block' ) ) : the_row(); ?>
					<h1><?php the_sub_field( 'title' ); ?></h1>
					<p><?php the_sub_field( 'text' ); ?></p>
					<?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) : ?>
					    <?php
                        $linkLabel = get_sub_field('link_label');
                        if (!$linkLabel) { $linkLabel = $link['title']; }
                        ?>
						<a class="btn <?= $buttonColor; ?>" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html($linkLabel); ?></a>
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