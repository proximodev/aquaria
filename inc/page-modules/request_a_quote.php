<?php
    $text_color = get_sub_field( 'text_color' );
    $background = get_sub_field( 'background' );
?>
<section class="request-a-quote" style="color: <?php if($text_color) { echo $text_color; } else { echo '#fff'; } ?>;">
    <?php if ( $background ) : ?>
    <div class="request-a-quote-background">
        <img src="<?php echo esc_url( $background['url'] ); ?>" alt="<?php echo esc_attr( $background['alt'] ); ?>" />
    </div>
    <?php endif; ?>
    <div class="request-a-quote-wrapper">
        <div class="content">
            <?php if(get_sub_field( 'top_title' )): ?>
                <div class="request-a-quote-top-title"><h3><?php the_sub_field( 'top_title' ); ?></h3></div>
            <?php endif; ?>
            <div class="request-a-quote-inside <?php if ( get_sub_field( 'form_left' ) ) { echo 'request-a-quote-inside-reverse'; } ?>">
                <div class="request-a-quote-sidebar">
                    <h3><?php the_sub_field( 'title' ); ?></h3>
                    <?php the_sub_field( 'text' ); ?>
                </div>
                <div class="request-a-quote-form">
                    <?php the_sub_field( 'form' ); ?>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
</section>