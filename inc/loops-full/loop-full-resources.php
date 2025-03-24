<div class="full">
    <div class="content">

        <div class="section_header_general news_header">
            <h1 class="_halfmargin">Resources</h1>
            <ul class="blog_categories">
                <li class="all"><a class="all" href="/resources/">All</a></li>
                <?php
                $uncategorized = get_term_by('name', 'uncategorized', 'resource_category');
                if ($uncategorized && !is_wp_error($uncategorized)) {
                    $uncategorized_id = $uncategorized->term_id;
                } else {
                    $uncategorized_id = 0;
                }
                
                $args = array(
                    'taxonomy'           => 'resource_category',
                    'orderby'            => 'name',
                    'order'              => 'ASC',
                    'title_li'           => '',
                    'style'              => 'list',
                    'show_count'         => false,
                    'hide_empty'         => true,
                    'exclude'            => $uncategorized_id,
                    'use_desc_for_title' => 1
                );
                wp_list_categories($args);
                ?>


            </ul>
        </div> <!-- section_header_team -->
    </div> <!-- content -->
</div> <!-- full -->



<div id="modal" class="modal" style="display:none;">
    <div class="section_model_text_wrapper">
        <?php if ( have_rows( 'resources_popup_modal', 'option' ) ) : ?>
            <?php while ( have_rows( 'resources_popup_modal', 'option' ) ) : the_row(); ?>
                <h1 class="halfmargin intro"><?php the_sub_field( 'title' ); ?></h1>
                <h1 class="success"><?php the_sub_field( 'title_success' ); ?> </h1>
                <p class="nomargin"><?php the_sub_field( 'text' ); ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php $form_id = 5; gravity_form($form_id, false, false, false, '', true); ?>
</div> <!-- modal -->

<script>
    jQuery(document).ready(function($) {
        // Hide the intro and success headings initially
        $('.intro').show();
        $('.success').hide();

        // When the form is submitted
        $('#gform_5').on('submit', function() {
            // Hide the intro and show the success headings
            $('.intro').hide();
            $('.success').show();
        });
    });
</script>



<div class="full">
    <div class="content">
        <?php if (have_posts()): ?>
            <div class="section_resources_wrapper">
                <?php while (have_posts()): the_post();?>
                    <?php get_template_part('inc/loops/loop-resources');?>
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