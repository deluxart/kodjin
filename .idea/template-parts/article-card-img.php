<div data-aos="fade-up"
     data-aos-easing="ease"
     data-aos-duration="1000"
     data-aos-delay="<?php echo $bc; ?>00" class="swiper-slide articleCard image">
    <?php if( has_post_thumbnail() ) { ?>
        <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php } else { ?>
        <div class="image no-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_no_img.jpg" alt="no-image" />
        </div>
    <?php } ?>
    <h4><?php the_title(); ?></h4>
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