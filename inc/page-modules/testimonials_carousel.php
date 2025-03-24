<section class="testimonials">
    <div class="content">
        <div class="testimonials-inside">
            <!-- Testimonials Header -->
            <div class="testimonials-header">
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'text' ); ?>
                </p>
            </div>
            
            <!-- Testimonial Slider -->
            <div class="testimonial-slider">
                <div class="testimonial-card-container">
                    <?php if ( have_rows( 'testimonial' ) ) : ?>
                        <?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
                            <div class="testimonial-card">
                                <div class="testimonial-stars">
                                    <?php
                                    // Display stars based on the 'stars' field in ACF
                                    $stars = get_sub_field( 'stars' );
                                    for ( $x = 0; $x < $stars; $x++ ) {
                                        echo '<i class="fa-solid fa-star"></i>';
                                    }
                                    ?>
                                </div>
                                <p class="testimonial-author">
                                    <?php the_sub_field( 'author_name' ); ?> - <?php the_sub_field( 'author_address' ); ?>
                                </p>
                                <p class="testimonial-text">
                                    <?php the_sub_field( 'text' ); ?>
                                </p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                
                <!-- Navigation Buttons and Dots -->
                <div class="testimonial-navigation">
                    <button class="testimonial-nav-btn prev-btn">
                        <img src="https://aquaria1stg.wpengine.com/wp-content/uploads/2024/11/right.png" alt="Previous" class="arrow-icon rotate-left">
                    </button>
                    <div class="testimonial-dots">
                        <?php if ( have_rows('testimonial') ) :
                            $testimonial_count = 0;
                            while ( have_rows('testimonial') ) : the_row(); ?>
                                <span class="dot <?php echo $testimonial_count === 0 ? 'active' : ''; ?>"></span>
                                <?php $testimonial_count++;
                            endwhile;
                        endif; ?>
                    </div>

                    <button class="testimonial-nav-btn next-btn">
                        <img src="https://aquaria1stg.wpengine.com/wp-content/uploads/2024/11/left.png" alt="Next" class="arrow-icon rotate-right">
                    </button>
                </div>
            </div>
            <!-- /.testimonial-slider -->
        </div>
    </div>
</section>
