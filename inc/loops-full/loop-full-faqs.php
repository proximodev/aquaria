<div class="full">
    <div class="content">
        <div class="section_header_general faq_header">
            <h1 class="nomargin">FAQ</h1>
        </div> <!-- content -->
    </div> <!-- full -->
</div>
<div class="full noselect">
    <div class="content">
        <?php if (have_posts()): ?>
            <div class="section_faq_wrapper">
                <?php while (have_posts()): the_post();?>
                    <?php get_template_part('inc/loops/loop-faq');?>
                    <?php wp_reset_postdata();?>
                <?php endwhile;?>
            </div> <!-- section_faq_wrapper -->
        </div>
    <?php endif;?>
</div> <!-- content -->
</div> <!-- full -->