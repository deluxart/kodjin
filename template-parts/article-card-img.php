<div data-aos="fade-up"
     data-aos-easing="ease"
     data-aos-duration="1000"
     data-aos-delay="<?php echo $bc; ?>00" class="swiper-slide articleCard image" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">
    <?php
    $post_wallpaper = get_field('post_wallpaper');
    if ($post_wallpaper) {
        ?>
        <div class="image">
            <a href="<?php the_permalink() ?>"><img src="<?php echo esc_url($post_wallpaper['url']); ?>" alt="<?php echo esc_attr($post_wallpaper['alt']); ?>" /></a>
        </div>
    <?php } elseif( has_post_thumbnail() ) { ?>
        <div class="image">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div>
    <?php } else { ?>
        <div class="image no-image">
            <a href="<?php the_permalink() ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_no_img.jpg" alt="<?php the_title(); ?>" /></a>
        </div>
    <?php } ?>
    <div class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
    <p class="date"><?php echo get_the_date('F j, Y'); ?></p>
    <?php
    $postTags = get_the_tags();
    if ($postTags) { ?>
        <ul class="tags">
            <?php foreach($postTags as $tag) { ?>
                <li><?php echo $tag->name . ' '; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>