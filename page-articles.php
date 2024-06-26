<?php
/*
* Template Name: Page: Articles
*/

get_header();
$categories = get_the_category();
?>

    <main id="articles" class="articles-archive">

        <div class="container">
            <div class="page-head">
                <div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                    </div>
                </div>
                <div data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="200">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'paged' => $paged
            );

            // The Query
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { $i = 1; ?>
                <div class="articles">
                        <?php while ( $the_query->have_posts() ) : $i++; $the_query->the_post(); ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $i; ?>00" class="articleCard image">
                                <?php
                                $post_wallpaper = get_field('post_wallpaper');
                                if ($post_wallpaper) {
                                    ?>
                                    <div class="image">
                                        <a href="<?php the_permalink() ?>">
                                            <img src="<?php echo esc_url($post_wallpaper['url']); ?>" alt="<?php echo esc_attr($post_wallpaper['alt']); ?>" />
                                        </a>
                                    </div>
                                <?php } elseif( has_post_thumbnail() ) { ?>
                                    <div class="image">
                                        <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail(); ?>
                                        </a>
                                    </div>
                                <?php } else { ?>
                                    <div class="image no-image">
                                        <a href="<?php the_permalink() ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_no_img.jpg" alt="<?php the_title(); ?>" />
                                        </a>
                                    </div>
                                <?php } ?>
                                <div class="title"><?php the_title(); ?></div>
                                <p class="date"><?php echo get_the_date('F j, Y'); ?></p>
                                <?php
                                $postTags = get_the_category();
                                if ($postTags) { ?>
                                    <ul class="tags">
                                        <?php foreach($postTags as $tag) { ?>
                                            <li><?php echo $tag->name . ' '; ?></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <div class="paginationWrap">
                    <?php wp_pagenavi(array('query' => $the_query)); ?>
                </div>
                <?php } ?>

            <section id="subscribe" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                <h2><?php the_field( 'block_title_subscribe', 'option' ); ?></h2>
                <p><?php the_field( 'block_description_subscribe', 'option' ); ?></p>
                <div class="kodjin_contact_from" data-name="subscribe">
                    <?php echo do_shortcode( '[contact-form-7 id="955" title="Subscribe"]' ); ?>
                </div>
                <div class="image">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/07/envelope_subscribe.png" alt="Subscribe" />
                </div>
            </section>
        </div>

    </main><!-- #main -->

<?php
get_footer();
