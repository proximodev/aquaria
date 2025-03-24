<div href="<?php the_permalink(); ?>" class="section_loop_resources bgcolor-white">
    <div class="section_loop_resources_img">
        <?php if (has_post_thumbnail())  {?>
            <?php the_post_thumbnail( 'featured-image' ); ?>
        <?php } else {?>
            <img src="https://dummyimage.com/600x400/47CF63/47CF63" alt=""> 
        <?php }?>
    </div> <!-- section-loop-blog_img -->
    <div class="section_loop_resources_text">
        <h5 class="halfmargin">
            <?php 
            $categories = get_the_terms( get_the_ID(), 'resource_category' );
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= $category->name . ', ';
                }
                $output = rtrim( $output, ', ' );
            }
            echo $output;
            ?>
        </h5>
        <h3 class="halfmargin"><?php the_title(); ?> 
        <!-- (<_?php $resources = get_the_ID(); $menu_order = get_post_field('menu_order', $resources); echo $menu_order; ?>)  -->
        </h3>
        <?php the_content();?>
        <!-- Important Note:  The modal is loaded in loop-full-resources becuase it causes issues being loaded in loop-resources.  -->
        <a href="#modal" class="open-modal btn white arrow" rel="modal:open nofollow" data-post-title="<?php echo esc_attr( get_the_title() ); ?>">
            Free Download <i class="fa-regular fa-arrow-right"></i>
        </a>
    </div> <!-- section_loop_blog_text -->
</div> <!-- add this closing tag -->
<script>
    jQuery(document).ready(function() {
      var openModalBtns = document.querySelectorAll(".open-modal");
      openModalBtns.forEach(function(btn) {
        btn.addEventListener("click", function(e) {
          e.preventDefault();
          var postTitle = this.getAttribute("data-post-title");
          var inputField = document.querySelector("#input_5_8");
          if (inputField) {
            inputField.value = postTitle;
        }
          // Open the modal
        jQuery("#modal").modal("show");
    });
    });
  });
</script>