<?php
/*
* Template Name: Page: Resources
*/

get_header();
?>

	<main id="primary" class="site-main articles resources">
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
            </div>
            <div class="resourcesSlider" data-aos="fade-up"
                 data-aos-easing="ease"
                 data-aos-duration="1000"
                 data-aos-delay="100">
                <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => array('post', 'webinars', 'whitepapers', 'cases'),
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="swiper-slide card">
                            <?php $post_image_resources = get_field( 'post_image_resources' ); ?>
                            <a href="<?php the_permalink() ?>">
                                <div class="image_wrap">
                            <?php if( $post_image_resources ) { ?>
                                <div class="image">
                                    <img src="<?php echo esc_url( $post_image_resources['url'] ); ?>" alt="<?php echo esc_attr( $post_image_resources['alt'] ); ?>" />
                                </div>
                            <?php } else { ?>
                                <div class="image no-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_no_img.jpg" alt="no-image" />
                                </div>
                            <?php } ?>
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
                            </a>
                            <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                            <p class="date"><?php echo get_the_date('F j, Y'); ?></p>
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
                                $taxonomy = '';

                                if ($postType === 'webinars') {
                                    $taxonomy = 'webinarcat';
                                } elseif ($postType === 'whitepapers') {
                                    $taxonomy = 'whitepapercat';
                                } elseif ($postType === 'cases') {
                                    $taxonomy = 'casecat';
                                }

                                if ($taxonomy) {
                                    $terms = get_the_terms(get_the_ID(), $taxonomy);

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
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                </div>
            </div>
            <section id="features_posts" class="featured_posts">
                <div class="head mb-32">
                    <h3 data-aos="fade-up" style="margin-bottom: 0"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="100">Featured posts</h3>
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
                        <?php echo do_shortcode( '[recent_posts category="featured" posts="5" link_icon="true" slides="true"]' ); ?>
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
            <section class="updates_by_category">
                <h3 class="mb-32" data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="100">All updates by category</h3>
                <ul>
                    <li data-aos="fade-left"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="100"><a href="<?php echo get_home_url(); ?>/blog/">Articles</a></li>
                    <li data-aos="fade-left"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="200"><a href="<?php echo get_home_url(); ?>/white-papers/">White Papers</a></li>
                    <li data-aos="fade-left"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="300"><a href="<?php echo get_home_url(); ?>/cases/">Case studies</a></li>
                    <li data-aos="fade-left"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="400"><a href="<?php echo get_home_url(); ?>/webinars/">Webinars</a></li>
                    <li data-aos="fade-left"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="500"><a href="<?php echo get_home_url(); ?>/news-events/">News and events</a></li>
                </ul>
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
                         <div>
                             <h2 data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="100">White Papers</h2>
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


            <section id="case_studies">
                <div class="container">
                    <div class="head mb-32">
                        <div>
                            <h2 data-aos="fade-up"
                                data-aos-easing="ease"
                                data-aos-duration="1000"
                                data-aos-delay="100">Case studies</h2>
                        </div>
                        <div data-aos="fade-left"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200" class="more">
                            <a href="/cases" class="read_more">
                                <span>All case studies</span>
                                <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $cases_query = new WP_Query($cases_args);
                    $cases_i = 1;
                    ?>

                    <div class="cards lightGray">
                        <?php if ($cases_query->have_posts()) :
                            while ($cases_query->have_posts()) : $cases_query->the_post();
                                $cases_i++;

                                $image = get_field( 'case_image' );
                                $press_picture = get_field( 'press_picture' );
                                ?>

                                <div data-aos="fade-up"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="<?php echo $cases_i; ?>00"
                                     class="card<?php if ( $image ) : ?> with_img<?php endif; ?><?php if ( $press_picture == 1 ) : ?> fix_img<?php endif; ?>">
                                    <?php if ( $image ) : ?>
                                        <div class="image">
                                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                        </div>
                                    <?php endif; ?>

                                    <div class="text_wrap">
                                        <div class="cont">
                                            <?php if ( have_rows( 'tags_head' ) ) : ?>
                                                <ul class="tags">
                                                    <?php while ( have_rows( 'tags_head' ) ) : the_row(); ?>
                                                        <li class="<?php the_sub_field( 'icon_position' ); ?>">
                                                            <?php $icon = get_sub_field( 'icon' ); ?>
                                                            <?php if ( $icon ) : ?>
                                                                <img src="<?php echo esc_url( $icon['url'] ); ?>"
                                                                     alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                                            <?php endif; ?>
                                                            <span><?php the_sub_field( 'title' ); ?></span>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>

                                            <h2><?php the_field( 'head_title' ); ?></h2>

                                            <div class="text">
                                                <?php the_field( 'head_description' ); ?>
                                            </div>
                                        </div>

                                        <a href="<?php the_permalink() ?>" class="read link">
                                            <svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </section>

            <section id="check_all_features" class="check_all_features" style="cursor: pointer;" onclick="window.location.href = '<?php echo get_home_url(); ?>/what-is-fhir/'; return false;">
                <div class="image">
                    <img data-aos="fade-left"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="200" src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/07/fhir_img_articles.png" alt="" />
                </div>
                <div class="block" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <h2>All about FHIR <br/>in simple words</h2>
                    <p>The only guide you will need</p>
                    <div class="actions">
                        <a href="<?php echo get_home_url(); ?>/what-is-fhir/" class="btn white">Read more</a>
                    </div>
                </div>
            </section>
            <?php echo do_shortcode('[webinars-list posts="6" order="date" title="Webinars"]') ?>

            <section id="kodjin_updates" class="featured_posts">
                <h3 class="mb-32" data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="100">News and events</h3>
                <div class="articles">
                    <div class="swiper-wrapper">
                        <?php echo do_shortcode( '[recent_posts category="news-and-events" posts="5" image="true" slides="true"]' ); ?>
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
