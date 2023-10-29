<div data-aos="fade-up"
     data-aos-easing="ease"
     data-aos-duration="1000"
     data-aos-delay="<?php echo $bc; ?>00" class="swiper-slide articleCard image" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">
    <?php if( has_post_thumbnail() ) { ?>
        <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php } else { ?>
        <div class="image no-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_no_img.jpg" alt="no-image" />
        </div>
    <?php } ?>
    <div class="title"><?php the_title(); ?></div>
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