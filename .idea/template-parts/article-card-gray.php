<div data-aos="fade-up"
     data-aos-easing="ease"
     data-aos-duration="1000"
     data-aos-delay="<?php echo $bc; ?>00" class="swiper-slide articleCard">
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
    <a href="<?php the_permalink() ?>" class="read">
        <svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
        </svg>
    </a>
</div>