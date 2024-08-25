<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodjin
 */

get_header();
?>

    <main id="primary" class="site-main">
        <div class="container">
            <div class="page__head">
                <div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                    </div>
                </div>
                <h1 data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="200"><?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'kodjin' ), '<span>' . get_search_query() . '</span>' );
                    ?></h1>
                <p data-aos="fade-up"
                   data-aos-easing="ease"
                   data-aos-duration="1000"
                   data-aos-delay="300"><?php the_archive_description(); ?></p>
            </div>

            <?php if ( have_posts() ) : $bp = 0; ?>
                <div class="archive__list">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : $bp++;
                        the_post();

                            ?>

                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $bp; ?>00" class="swiper-slide articleCard image" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">
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
                                <a href="<?php the_permalink() ?>"><div class="title"><?php the_title(); ?></div></a>
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
                        <?php endwhile; ?>
                </div>

                <div class="paginationWrap" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100" style="margin-top: 20px;">
                    <?php wp_pagenavi(); ?>
                </div>

            <?php



            else : ?>
                <div data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <?php get_template_part( 'template-parts/content', 'none' ); ?>
                </div>

            <?php endif;
            ?>
        </div>
    </main><!-- #main -->
<?php
get_footer();
