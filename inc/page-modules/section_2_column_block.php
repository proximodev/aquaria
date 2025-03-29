<?php
$backgroundColor = "";
$variable = '';

$title = get_sub_field('title');
$kicker = get_sub_field('kicker');
$generalText = get_sub_field('general_text');
$icon = get_sub_field('icon');
$buttonLink = get_sub_field('button_link');
$backgroundColor = get_sub_field('background_color');
$customClass = get_sub_field('custom_class');
$layout = get_sub_field('layout');

if ($backgroundColor === 'bgcolor-black') {
    $variable = 'white';
}
if ($backgroundColor === 'bgcolor-ocean-turquoise') {
    $variable = 'ice-green';
}
?>

<div class="full <?php echo esc_attr($backgroundColor); ?> <?php echo esc_attr($variable); ?> <?php echo esc_attr($layout); ?> <?= $customClass; ?>">
    <div class="content">
        <div class="section_2_column_block">

            <?php $video = get_sub_field('video'); ?>
            <?php if ($video): ?>
                <div class="section_2_column_block_item block_item_video">
                    <video autoplay muted loop playsinline>
                        <source src="<?php echo esc_url($video); ?>" type="video/mp4">
                    </video>
                </div>
            <?php endif; ?>

            <?php $image = get_sub_field('image'); ?>
            <?php if ($image): ?>
                <div class="section_2_column_block_item block_item_img">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endif; ?>

            <?php if (have_rows('profile_one')): ?>
                <div class="section_2_column_block_item profile_img">
                    <?php while (have_rows('profile_one')) : the_row(); ?>
                        <div class="profile__item">
                            <?php $profile_image = get_sub_field('profile_image'); ?>
                            <?php if ($profile_image): ?>
                                <img src="<?php echo esc_url($profile_image['url']); ?>" alt="<?php echo esc_attr($profile_image['alt']); ?>" />
                            <?php endif; ?>
                            <h4 class="nomargin"><?php the_sub_field('name'); ?></h4>
                            <p><?php the_sub_field('title'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <div class="section_2_column_block_item block_item_text">
                <?php if ($icon): ?>
                    <div class="icon-wrapper">
                        <img class="icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                    </div>
                <?php endif; ?>

                <?php if ($kicker): ?>
                    <p class="kicker"><?php echo esc_html($kicker); ?></p>
                <?php endif; ?>

                <?php if ($title): ?>
                    <h2><?php echo esc_html($title); ?></h2>
                <?php endif; ?>

                <?php echo $generalText; ?>

                <?php if (have_rows('list_w_icons')): ?>
                    <ul class="has_icon">
                        <?php while (have_rows('list_w_icons')) : the_row(); ?>
                            <li>
                                <?php $list_image = get_sub_field('image'); ?>
                                <?php if ($list_image): ?>
                                    <img src="<?php echo esc_url($list_image['url']); ?>" alt="<?php echo esc_attr($list_image['alt']); ?>" />
                                <?php endif; ?>
                                <?php the_sub_field('text'); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php if ($buttonLink): ?>
                    <?php
                    $linkLabel = get_sub_field('button_label');
                    if (!$linkLabel && isset($buttonLink['title'])) {
                        $linkLabel = $buttonLink['title'];
                    }
                    $buttonColor = get_sub_field('button_color'); // You had this as a variable without defining it.
                    ?>
                    <a class="btn <?php echo esc_attr($buttonColor); ?>" href="<?php echo esc_url($buttonLink['url']); ?>" target="<?php echo esc_attr($buttonLink['target']); ?>">
                        <?php echo esc_html($linkLabel); ?>
                    </a>
                <?php endif; ?>
            </div> <!-- section_2_column_block_item -->

        </div> <!-- section_2_column_block -->
    </div> <!-- content -->
</div> <!-- full -->
