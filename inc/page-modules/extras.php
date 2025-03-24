
<?php $value = get_sub_field('text_content_type'); ?>
<?php if ($value === 'general_text') { ?>
	<p>using general text</p>
<?php  } elseif ($value === 'list_icons') { ?>
	<p>using list icons</p>
<?php } ?>




<?php get_template_part( '/inc/page-modules/page-module-width-open' ); ?>
<div class="section-module-wrapper <?php get_template_part( '/inc/page-modules/page-module-options' ); ?>"> 

	
	<?php get_template_part( '/inc/page-modules/page-module-width-close' ); ?>