<div href="<?php the_permalink(); ?>" class="section_loop_faq bgcolor-white">
  <div class="loop_faq_item accordion_faqs">  
    <div class="accordion-title">
      <h4 class="nomargin"><?php the_title();?>
      <!-- (<_?php $faqs = get_the_ID(); $menu_order = get_post_field('menu_order', $faqs); echo $menu_order; ?>) -->
    </h4> <i class="far fa-plus"></i>
  </div>
  <div class="accordion-content">
    <?php the_content();?>
  </div>
</div> <!-- loop_client_item -->
</div> <!-- add this closing tag -->