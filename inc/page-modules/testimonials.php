<section class="testimonials">
    <div class="content">
        <div class="testimonials-inside">
            <div class="testimonials-header">
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'text' ); ?>
                </p>
            </div>
            <?php if ( have_rows( 'testimonial' ) ) : ?>
            <div class="testimonials-list">
                <?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
                <div class="testimonials-item">
                    <div class="testimonials-item-photo">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="testimonials-item-wrap">
                        <div class="testimonials-item-stars">
                            <?php
                        $stars = get_sub_field( 'stars' );
                        for ($x = 0; $x < $stars; $x++) {
                            echo '<i class="fa-solid fa-star"></i>';
                        }
                    ?>
                        </div>
                        <div class="testimonials-item-content">
                            <?php the_sub_field( 'text' ); ?>
                        </div>
                        <div class="testimonials-item-autor">
                            <div class="testimonials-item-autor-photo">
                                <?php $author_image = get_sub_field( 'author_image' ); ?>
                                <?php if ( $author_image ) : ?>
                                <img src="<?php echo esc_url( $author_image['url'] ); ?>" alt="<?php echo esc_attr( $author_image['alt'] ); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="testimonials-item-autor-description">
                                <div class="testimonials-item-autor-name">
                                    <?php the_sub_field( 'author_name' ); ?>
                                </div>
                                <div class="testimonials-item-autor-position">
                                    <?php the_sub_field( 'author_position' ); ?>
                                </div>
                                <div class="testimonials-item-autor-address">
                                    <?php the_sub_field( 'author_address' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- /.testimonials-list -->
            <?php endif; ?>
        </div>
    </div>
    <!-- /.content -->
</section>
<!-- /.testimonials -->