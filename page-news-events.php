<?php
/*
* Template Name: Page: News and events
*/

$categories = get_the_category();

get_header(); ?>

    <main id="articles" class="articles-archive">

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
                    data-aos-delay="200"><?php echo get_the_title(); ?></h1>
                <p data-aos="fade-up"
                   data-aos-easing="ease"
                   data-aos-duration="1000"
                   data-aos-delay="300"><?php the_field( 'page_description_insights' ); ?></p>
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
                    'include'            => '32, 33',
                );

                $categories_list = wp_list_categories($args);

                if (is_category() || is_home() || is_page('insights') || is_page('news-events') || is_page('blog')) {
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
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'paged' => $paged,
                'cat' => '32,33'
            );

            // The Query
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { $i = 1; ?>
                <div class="articles">
                    <?php while ( $the_query->have_posts() ) : $i++; $the_query->the_post();
                    ?>
                        <div data-aos="fade-up"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="<?php echo $i; ?>00" class="articleCard image" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">
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
