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
            <div class="testimonials-masonry">
                <?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
                <div class="testimonials-review-card">
                    <div class="testimonials-stars">
                        <?php
                        $stars = get_sub_field( 'stars' );
                        for ($x = 0; $x < $stars; $x++) {
                            echo '<i class="fa-solid fa-star"></i>';
                        }
                        ?>
                    </div>
                    <p class="testimonials-review-text">
                        <?php the_sub_field( 'text' ); ?>
                    </p>
                    <p class="testimonials-review-author">
                        <span><?php the_sub_field( 'author_name' ); ?></span><br>
                        <?php the_sub_field( 'author_position' ); ?><br>
                        <?php the_sub_field( 'author_address' ); ?>
                    </p>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- /.testimonials-masonry -->
            <?php endif; ?>
        </div>
    </div>
    <!-- /.testimonials-content -->
</section>
<!-- /.testimonials -->
