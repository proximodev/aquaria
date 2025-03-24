<section class="table-module">
    <div class="content">
        <div class="table-module-inside">
            <div class="table-module-header">
                <h3><?php the_sub_field( 'title' ); ?></h3>
                <p><?php the_sub_field( 'text' ); ?></p>
            </div>
            <?php if ( have_rows( 'table_row' ) ) : ?>
            <div class="table-module-body">
                <table>
                    <?php $row_index = 1; ?>
                    <?php while ( have_rows( 'table_row' ) ) : the_row(); ?>
                        <tr>
                            <?php if ( have_rows( 'table_cell' ) ) : ?>
                                <?php while ( have_rows( 'table_cell' ) ) : the_row(); ?>
                                    <<?php if($row_index == 1) { echo 'th'; } else { echo 'td'; } ?> class="<?php if(get_sub_field( 'cell_background' ) == 'Green') { echo 'cell-green';} if(get_sub_field( 'cell_background' ) == 'Gray') { echo 'cell-gray'; } ?>">
                                        <?php if( get_sub_field( 'cell_type' ) == 'Text'): ?>
                                            <?php the_sub_field( 'cell_text' ); ?>
                                        <?php else: ?>
                                            <?php if ( get_sub_field( 'cell_check' ) == 1 ): ?>
                                                <img src="<?php bloginfo('template_url'); ?>/imgs/cell-true.svg" alt="">
                                            <?php else: ?>
                                                <img src="<?php bloginfo('template_url'); ?>/imgs/cell-false.svg" alt="">
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </<?php if($row_index == 1) { echo 'th'; } else { echo 'td'; } ?>>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </tr>
                        <?php $row_index++; ?>
                    <?php endwhile; ?>
                </table>
            </div>
            <?php endif; ?>
        </div>
        <!-- /.table-module-inside -->
    </div>
    <!-- /.content -->
</section>
<!-- /.table-module -->