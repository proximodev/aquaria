<?php $featured_posts = get_sub_field( 'products' ); ?>
<?php if ( $featured_posts ) : ?>
<section class="our-products">
    <div class="content">
        <div class="our-products-title">
            <h3>
                <?php the_sub_field( 'title' ); ?>
            </h3>
        </div>
        <div class="our-products-list">
            <?php if (  get_sub_field( 'custom' ) ) : ?>
                <?php if( have_rows('product_custom') ): ?>
                    <?php while( have_rows('product_custom') ): the_row(); ?>
                        <?php $link = get_sub_field('link'); if( $link ): $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                        <a class="our-products-item" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <span class="our-products-item-thumb">
                                <?php $image = get_sub_field('image'); if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </span>
                            <span class="our-products-item-content">
                                <span class="our-products-item-title">
                                    <?php the_sub_field( 'title' ); ?>
                                </span>
                                <span class="our-products-item-meta">
                                    <?php the_sub_field( 'subtitle' ); ?>
                                </span>
                                <span class="our-products-item-more"><?php echo esc_html( $link_title ); ?></span>
                            </span>
                        </a>
                        <!-- /.our-products-item -->
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php else: ?>
                <?php foreach( $featured_posts as $featured_post ):
                    $permalink = get_permalink( $featured_post->ID );
                    $title = get_the_title( $featured_post->ID );
                    $meta = get_field( 'meta', $featured_post->ID );
                    $thumb = get_the_post_thumbnail( $featured_post->ID, 'large' );
                ?>
                <a class="our-products-item" href="<?php echo esc_url( $permalink ); ?>">
                    <span class="our-products-item-thumb">
                        <?php if($thumb) { echo $thumb; } ?>
                    </span>
                    <span class="our-products-item-content">
                        <span class="our-products-item-title">
                            <?php echo esc_html( $title ); ?>
                        </span>
                        <span class="our-products-item-meta">
                            <?php echo esc_html( $meta ); ?>
                        </span>
                        <span class="our-products-item-more">View details</span>
                    </span>
                </a>
                <!-- /.our-products-item -->
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <!-- /.our-products-list -->
    </div>
    <!-- /.content -->
</section>
<?php endif; ?>