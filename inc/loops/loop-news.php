<a href="<?php the_permalink(); ?>" class="section_loop_news bgcolor-white">
    <div class="section_loop_news_img">
        <?php if (has_post_thumbnail())  {?>
            <?php the_post_thumbnail( 'featured-image' ); ?>
        <?php } else {?>
            <img src="https://dummyimage.com/600x400/47CF63/47CF63" alt=""> 
        <?php }?>       
    </div> <!-- section-loop-blog_img -->
    <div class="section_loop_news_text">
        <div class="box">
            <h4 class="heading"><?php the_title(); ?></h4>
        </div>
        <div class="meta_info">
            <p class="nomargin s news_cat">
               <?php 
               $categories = get_the_category();
               $output = '';
               if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= $category->name . ', ';
                }
                $output = rtrim( $output, ', ' );
            }
            echo $output;
            ?>
        </p>
        <p class="nomargin s news_readtime">
            <?php echo do_shortcode('[rt_reading_time postfix="min"]'); ?>
        </p>      
    </div>
</div> <!-- section_loop_blog_text -->
</a> <!-- add this closing tag -->