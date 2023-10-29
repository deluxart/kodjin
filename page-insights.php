<?php
/*
* Template Name: Page: Insights
*/

get_header();

$blog_id = get_option('page_for_posts', true);
?>

    <main id="primary" class="site-main articles">

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
                        'include'            => '9,1,5,10,6,4,32,33',
                    );

                    $categories_list = wp_list_categories($args);

                    if (is_category() || is_home() || is_page('insights')) {
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
            <div class="articles__last">
                <div>
                    <div class="big">
                        <?php echo do_shortcode( '[recent_posts posts="1" image="true"]' ); ?>
                    </div>
                </div>
                <div>
                    <div class="list">
                        <?php echo do_shortcode( '[recent_posts offset="1" posts="3"]' ); ?>
                    </div>
                </div>
            </div>
            <div class="featured_posts">
                <h3 data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="100">Featured posts</h3>
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
            </div>
            <section id="check_all_features" class="check_all_features">
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
                    <p> The only guide you will need</p>
                    <div class="actions">
                        <a href="<?php echo get_home_url(); ?>/whitepapers/the-ultimate-guide-to-fhir/" class="btn white">Download</a>
                    </div>
                </div>
            </section>
        </div>

    </main><!-- #main -->

<?php
get_footer();
