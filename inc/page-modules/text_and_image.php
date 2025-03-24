<section class="text-and-image">
    <div class="content">
        <div class="text-and-image-inside">
            <div class="text-and-image-content">
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <?php the_sub_field( 'text' ); ?>
                <?php $button = get_sub_field( 'button' ); ?>
                <div class="text-and-image-navigation">
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
            </div>
            <div class="text-and-image-photo">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- /.content -->
</section>
<!-- /.text-and-image -->