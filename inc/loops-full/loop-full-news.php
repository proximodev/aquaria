<div class="full">
    <div class="content">

        <div class="section_header_general news_header">
            <h1 class="_halfmargin">Blog</h1>


            <div class="serach-box-container">
                    <form role="search" method="get" class="blog-search-form" action="<?php echo esc_url( get_pagenum_link( get_query_var('paged') ? get_query_var('paged') : 1 ) ); ?>">
                    <button type="submit" class="search-submit">
                        <i class="fa fa-search"></i> <!-- Icon for search button -->
                    </button>
                    <input type="search" class="search-field" placeholder="Search blog..." autocomplete="off" value="<?php echo isset($_GET['search']) ? esc_attr($_GET['search']) : ''; ?>" name="search" />
                    
                </form>    
            </div>
                
                
            <ul class="blog_categories">
                <li class="all"><a class="all" href="/blog/">All</a></li>
                <?php wp_list_categories( array(
                    'orderby'            => 'name',
                    'use_desc_for_title' => 1,
                    'order'              => 'ASC',
                    'title_li'           => 0,
                    'style'              => 'list',
                    'show_count'         => 0,
                    'show_empty'         => 0,
                    'exclude'            => get_cat_ID( 'uncategorized' ), 
                )); ?>

            </ul>
        </div> <!-- section_header_team -->
    </div> <!-- content -->
</div> <!-- full -->


<div class="full bgcolor-gray-light">
    <div class="content">
        <?php if (have_posts()): ?>
            <div class="section_news_wrapper">
                <?php while (have_posts()): the_post();?>
                    <?php get_template_part('inc/loops/loop-news');?>
                    <?php wp_reset_postdata();?>
                <?php endwhile;?>
            </div> <!-- section_news_wrapper -->


            <div class="pagination">
                <?php
                global $wp_query;
                $big = 999999999;
                $paginate_links = paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => '<i class="fa-regular fa-angle-left"></i>',
                    'next_text' =>  '<i class="fa-regular fa-angle-right"></i>',
                    'prev_next' => true,
                    'type' => 'array',
                    'prev_link' => '<span class="prev-link">%link</span>',
                    'next_link' => '<span class="next-link">%link</span>',
                    'before_page_number' => '<span class="page-number">',
                    'after_page_number' => '</span>',
                    'mid_size' => 2
                ) );

                if ($paginate_links) {
                    echo '<ul>';
                    if (strpos($paginate_links[0], 'prev') === false) {
                        echo '<li>' . str_replace('href', 'class="prev-link disabled" href', $paginate_links[0]) . '</li>';
                    } else {
                        echo '<li>' . $paginate_links[0] . '</li>';
                    }
                    for ($i=1; $i<count($paginate_links)-1; $i++) {
                        echo '<li>' . $paginate_links[$i] . '</li>';
                    }
                    if (strpos($paginate_links[count($paginate_links)-1], 'next') === false) {
                        echo '<li>' . str_replace('href', 'class="next-link disabled" href', $paginate_links[count($paginate_links)-1]) . '</li>';
                    } else {
                        echo '<li>' . $paginate_links[count($paginate_links)-1] . '</li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>





        </div>
    <?php endif;?>
</div> <!-- content -->
</div> <!-- full -->