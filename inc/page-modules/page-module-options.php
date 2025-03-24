module_width-<?php the_sub_field( 'module_width' ); ?> 
module_spacing_top-<?php the_sub_field( 'module_spacing_top' ); ?> 
module_spacing_bottom-<?php the_sub_field('module_spacing_bottom'); ?> 
border_<?php the_sub_field( 'borders' ); ?>
<?php if ( get_sub_field( 'border_settings' ) == 'partial' ) : ?> <?php echo 'border_partial' ?><?php endif; ?>
<?php if ( get_sub_field( 'border_settings' ) == 'full' ) : ?> <?php echo 'border_full' ?><?php endif; ?>
<?php if ( get_sub_field( 'sidebars' ) == 1 ) : ?> <?php echo 'modulesidebar' ?><?php endif; ?>

