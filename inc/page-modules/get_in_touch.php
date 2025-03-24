<?php
    $text_color = get_sub_field( 'text_color' );
    $button = get_sub_field( 'button' );
    $phone = get_sub_field( 'phone' );
    $background = get_sub_field( 'background' );
?>
<section class="get-in-touch" style="color: <?php if($text_color) { echo $text_color; } else { echo '#fff'; } ?>;">
    <div class="get-in-touch-background">
        <?php if ( $background ) : ?>
        <img src="<?php echo esc_url( $background['url'] ); ?>" alt="<?php echo esc_attr( $background['alt'] ); ?>" />
        <?php endif; ?>
    </div>
    <div class="get-in-touch-wrapper">
        <div class="content">
            <div class="get-in-touch-inside">
                <div class="get-in-touch-title">
                    <h2>
                        <?php the_sub_field( 'title' ); ?>
                    </h2>
                </div>
                <div class="get-in-touch-text">
                    <?php the_sub_field( 'text' ); ?>
                </div>
                <?php if ( $phone ) : ?>
                <div class="get-in-touch-phone"><a href="<?php echo esc_url( $phone['url'] ); ?>" target="<?php echo esc_attr( $phone['target'] ); ?>">
                        <?php echo html_entity_decode( $phone['title'] ); ?>
                    </a></div>
                <?php endif; ?>
                <?php if( $phone && $button): ?>
                <div class="get-in-touch-separator" style="background-color: <?php if($text_color) { echo $text_color; } else { echo '#fff'; } ?>;"></div>
                <?php endif; ?>
                <?php if ( $button ) : ?>
                <div class="get-in-touch-button"><a class="btn huge white_reversed arrow" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>">
                        <?php echo esc_html( $button['title'] ); ?> <i class="fa-regular fa-arrow-right"></i>
                    </a></div>
                <?php endif; ?>
            </div>
        </div>
        <!-- /.content -->
    </div>
</section>