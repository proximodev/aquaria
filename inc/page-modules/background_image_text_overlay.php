<div class="full">
	<div class="content">
		<div class="background_image_text_overlay">
			<?php $image = get_sub_field( 'image' ); ?>
			<div class="background_image_text_overlay_img_small" style="background-image: url(<?php echo esc_url( $image['url'] ); ?>);">
				<div class="background_image_text_overlay_text centered_text">
					<h2 class="nomargin white"><?php the_sub_field( 'text' ); ?></h2>
				</div> <!-- background_image_text_overlay_text -->
			</div>
		</div>
	</div><!-- Closing content div -->
</div><!-- Closing full div -->


