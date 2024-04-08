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
                    data-aos-delay="200"><?php echo the_archive_title(); ?></h1>
                <p data-aos="fade-up"
                   data-aos-easing="ease"
                   data-aos-duration="1000"
                   data-aos-delay="300"><?php the_archive_description(); ?></p>
                <?php
                $current_category = get_queried_object();

                $args = array(
                    'orderby'         => 'name',
                    'hide_empty'      => 1,
                    'use_desc_for_title' => 0,
                    'hierarchical'   => 0,
                    'show_option_all' => 'All',
                    'title_li'        => '',
                    'echo'            => 0,
                    'include'            => '9,1,5,10,6,4,32,33',
                );

                $categories_list = wp_list_categories($args);

                if (is_home()) {
                    $current_category_id = $current_category ? $current_category->term_id : 0;
                    $categories_list = str_replace('cat-item-all', 'cat-item-all current-cat', $categories_list);
                }

                $categories_list = '<ul class="list_categories" data-aos="fade-up"
							data-aos-easing="ease"
							data-aos-duration="1000"
							data-aos-delay="400">' . $categories_list . '</ul>';

                echo $categories_list;
                ?>
            </div>

            <?php if ( have_posts() ) : $bp = 0; ?>
                <div class="archive__list">
                <?php
                /* Start the Loop */
                while ( have_posts() ) : $bp++;
                    the_post();

                    if ($current_category_id === 4) {
                    ?>

                    <div class="articleCard" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="<?php echo $bp; ?>00" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">

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
                        <?php }
                        ?>
                        <a href="<?php the_permalink() ?>" class="read">
                            <svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>

               <?php
                    } else { ?>
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
                        <?php }

                    endwhile; ?>
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
