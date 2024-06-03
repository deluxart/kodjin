<?php

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
                <div data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="200">
                    <h1 class="heading">Webinars</h1>
                </div>
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

            <section id="features_posts" class="featured_posts">
                <div class="head mb-32" style="display: grid;grid-template-columns: 1fr auto;align-items: center;">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2 style="margin-bottom: 0">Latest Articles</h2>
                    </div>
                    <div data-aos="fade-left"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="200" class="more">
                        <a href="/blog/" class="read_more">
                            <span>All articles</span>
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="articles">
                    <div class="swiper-wrapper">
                        <?php echo do_shortcode( '[recent_posts posts="5" link_icon="true" slides="true"]' ); ?>
                    </div>
                    <button class="slider-nav button-prev">
                        <svg width="100%" height="100%" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="29" cy="29" r="27.5" transform="rotate(-180 29 29)" fill="white" stroke="black" stroke-width="3"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.674 29.3517L23.022 28.2079L32.0355 20.5601C32.6672 20.0241 33.6138 20.1017 34.1497 20.7334C34.6857 21.3651 34.6081 22.3116 33.9764 22.8476L26.3109 29.3517L33.9764 35.8558C34.6081 36.3918 34.6857 37.3383 34.1497 37.97C33.6138 38.6017 32.6672 38.6793 32.0355 38.1433L23.022 30.4955L21.674 29.3517Z" fill="black"/>
                        </svg>
                    </button>
                    <button class="slider-nav button-next">
                        <svg width="100%" height="100%" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="29" cy="29" r="27.5" fill="white" stroke="black" stroke-width="3"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.326 28.6483L34.978 29.7921L25.9645 37.4399C25.3328 37.9759 24.3862 37.8983 23.8503 37.2666C23.3143 36.6349 23.3919 35.6884 24.0236 35.1524L31.6891 28.6483L24.0236 22.1442C23.3919 21.6082 23.3143 20.6617 23.8503 20.03C24.3862 19.3983 25.3328 19.3207 25.9645 19.8567L34.978 27.5045L36.326 28.6483Z" fill="black"/>
                        </svg>
                    </button>
                </div>
            </section>

            <section id="whitepapers">
                <?php
                $wp_args = array(
                    'post_type' => 'whitepapers',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $wp_query = new WP_Query($wp_args);
                $wp_i = 1;
                ?>

                <div class="other_whitepapers">
                    <div class="head mb-32">
                        <div data-aos="fade-up"
                              data-aos-easing="ease"
                              data-aos-duration="1000"
                              data-aos-delay="100">
                            <h2>White Papers</h2>
                        </div>
                        <div data-aos="fade-left"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200" class="more">
                            <a href="<?php echo get_home_url(); ?>/white-papers/" class="read_more">
                                <span>All White Papers</span>
                                <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="other_whitepapers_slider">
                        <div class="swiper-wrapper">
                            <?php
                            if ($wp_query->have_posts()) {
                                while ($wp_query->have_posts()) {
                                    $wp_query->the_post();
                                    $wp_i++;
                                    ?>

                                    <div class="card swiper-slide" data-aos="fade-up"
                                         data-aos-easing="ease"
                                         data-aos-duration="1000"
                                         data-aos-delay="<?php echo $wp_i; ?>00">
                                        <div>
                                            <?php $wallpaper_whitepaper = get_field( 'wallpaper_whitepaper' ); ?>
                                            <?php if ( $wallpaper_whitepaper ) : ?>
                                                <div class="image">
                                                    <img src="<?php echo esc_url( $wallpaper_whitepaper['url'] ); ?>" alt="<?php echo esc_attr( $wallpaper_whitepaper['alt'] ); ?>" />
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <a href="<?php the_permalink() ?>"><h4><?php the_field( 'title_whitepaper' ); ?></h4></a>
                                            <?php
                                            $postTags = get_the_tags();

                                            if ($postTags) {
                                                echo '<ul class="tags">';
                                                foreach ($postTags as $tag) {
                                                    echo '<li>' . $tag->name . ' </li>';
                                                }
                                                echo '</ul>';
                                            } else {
                                                $postType = get_post_type();
                                                $wp_taxonomy = 'whitepapercat';

                                                if ($wp_taxonomy) {
                                                    $terms = get_the_terms(get_the_ID(), $wp_taxonomy);

                                                    if ($terms && !is_wp_error($terms)) {
                                                        echo '<ul class="tags">';
                                                        foreach ($terms as $term) {
                                                            echo '<li>' . $term->name . ' </li>';
                                                        }
                                                        echo '</ul>';
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php }
                                wp_reset_postdata();
                            } ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main><!-- #main -->

<?php
get_footer();
