<?php
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
?>

<div class="full">
	<div class="content">
        <section class="feature-tiles">
          <div class="container">
            <div class="heading-text">
              <h1 class="title">
                <?= $title; ?>
              </h1>
            </div>

            <div class="graphic-and-description">
              <div class="water-graphic">
                <div class="circle-dots"></div>
              </div>
              <?php if($text): ?>
              <div class="description">
                <p>
                  <?= $text; ?>
                </p>
              </div>
              <?php endif; ?>
            </div>

            <?php if( have_rows('tiles') ): ?>
              <div class="features">
                <?php while( have_rows('tiles') ): the_row();
                  $icon = get_sub_field('tile_icon');
                  $title = get_sub_field('tile_title');
                  $icon_url = isset($icon['url']) ? esc_url($icon['url']) : '';
                  $icon_alt = isset($icon['alt']) ? esc_attr($icon['alt']) : '';
                ?>
                  <div class="feature-box">
                    <div class="icon">
                      <?php if( $icon_url ): ?>
                        <img src="<?php echo $icon_url; ?>" alt="<?php echo $icon_alt; ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="feature-text">
                      <h3><?php echo wp_kses_post($title); ?></h3>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>
        </section>
    </div>
</div>