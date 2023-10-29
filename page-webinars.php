<?php
/*
* Template Name: Page: Webinars
*/

get_header();
?>

    <main id="webinars" class="webinars-archive">

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
                <h2 data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="200"><?php the_title(); ?></h2>
            </div>
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'webinars',
                'posts_per_page' => 6,
                'paged' => $paged
            );

            // The Query
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { $i = 1; ?>
                <div class="webinars">
                        <?php while ( $the_query->have_posts() ) : $i++; $the_query->the_post();
                            $webinars = get_the_terms( get_the_ID(), 'webinarcat' );
                        ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $i; ?>00" class="webinar">
                                <a href="<?php the_permalink() ?>">
                                    <div class="wallpaper" <?php if (get_field( 'youtube_video_id' )) { ?>style="background-image: url('https://img.youtube.com/vi/<?php the_field( 'youtube_video_id' ); ?>/hqdefault.jpg')"<?php } ?>>
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="21" cy="21" r="21" fill="black"/>
                                            <path d="M26 21L20.4315 26.5685V21V15.4315L26 21Z" fill="white"/>
                                        </svg>
                                    </div>
                                </a>
                                <a href="<?php the_permalink() ?>"><h4><?php the_field( 'title_webinar' ); ?></h4></a>
                                <?php if( has_term('', 'webinarcat') ){
                                    echo '<ul class="tags">';
                                    foreach ( $webinars as $webinar ) {
                                        $children = $webinar->name;
                                        echo '<li><span>';
                                        echo $children;
                                        echo '</span></li>';
                                    }
                                    echo '</ul>';
                                } ?>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <?php } ?>

            <section class="check_all_features">
                <div class="block" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <h2>Would you like to order a webinar?</h2>
                    <p>Write us down to discuss the details</p>
                    <div>
                        <button data-name="request_demo" class="btn white da-modal">Contact us</button>
                    </div>
                </div>
            </section>
        </div>

    </main><!-- #main -->

<?php
get_footer();
