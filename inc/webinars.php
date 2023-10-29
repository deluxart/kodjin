<?php
add_action( 'init', 'register_webinars_post_type' );

function register_webinars_post_type() {
    register_taxonomy('webinarcat', array('webinars'), array(
        'label'                 => 'Categories',
        'labels'                => array(
            'name'              => 'Categories',
            'singular_name'     => 'Categories',
            'search_items'      => 'Search category',
            'all_items'         => 'All categories',
            'parent_item'       => 'Parent category',
            'parent_item_colon' => 'Parent category:',
            'edit_item'         => 'Edit category',
            'update_item'       => 'Update category',
            'add_new_item'      => 'Add category',
            'new_item_name'     => 'Add new category',
            'menu_name'         => 'Categories',
        ),
        'description'           => 'Categories for webinars',
        'public'                => true,
        'show_in_nav_menus'     => false,
        'show_in_rest'          => true,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'show_admin_column'     => true,
    ) );

    register_post_type('webinars', array(
        'label'               => 'Webinars',
        'labels'              => array(
            'name' => 'Webinars',
            'singular_name' => 'Webinar',
            'add_new' => 'Add webinar',
            'add_new_item' => 'Add new webinar',
            'edit_item' => 'Edit webinar',
            'new_item' => 'New webinar',
            'all_items' => 'All webinars',
            'search_items' => 'Webinar search',
            'menu_name' => 'Webinars'
        ),
        'menu_icon' => 'dashicons-format-video',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'menu_position' 	  => 3,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'           => array(
            'slug' => 'webinars',
            'with_front' => false
        ),
        'has_archive'         => true,
        'query_var'           => true,
        'show_in_rest' 		  => true,
        'supports'            => array( 'title', 'thumbnail', 'revisions' ),
    ) );
}

add_shortcode( 'webinars-list', 'other_webinars_shortcode' );

function other_webinars_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'webinars',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'category' => '',
        'post_status' => 'publish',
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'order' => $args['order'],
        'orderby' => $args['orderby'],
        'posts_per_page' => $args['posts'],
        'category_name' => $args['category'],
        'post__not_in' => array( get_the_ID() ),
        'post_status' => 'publish',
    );

    $query = new WP_Query( $options );
    $section_title = isset($atts['title']) ? esc_html($atts['title']) : '';
    if ( $query->have_posts() ) { $i = 1; ?>
        <section id="webinars" class="blog_section">
            <div class="container">
                <div class="head mb-32">
                    <div>
                        <h2 data-aos="fade-up"
                            data-aos-easing="ease"
                            data-aos-duration="1000"
                            data-aos-delay="100">
                            <?php if ($section_title) {
                                    echo $section_title;
                                } else {
                                    echo 'Webinars';
                                }
                            ?>
                        </h2>
                    </div>
                    <div data-aos="fade-left"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="200" class="more">
                        <a href="<?php echo get_home_url(); ?>/resources/webinars/" class="read_more">
                            <span>All updates</span>
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="articles webinars">
                    <div class="swiper-wrapper">
                        <?php while ( $query->have_posts() ) : $query->the_post(); $i++;
                            $webinars = get_the_terms( get_the_ID(), 'webinarcat' );
                        ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $i; ?>00" class="swiper-slide webinar">
                                <a href="<?php the_permalink() ?>">
                                    <div class="wallpaper" <?php if (get_field( 'youtube_video_id' )) { ?>style="background-image: url('https://img.youtube.com/vi/<?php the_field( 'youtube_video_id' ); ?>/hqdefault.jpg')"<?php } ?>>
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="21" cy="21" r="21" fill="black"/>
                                            <path d="M26 21L20.4315 26.5685V21V15.4315L26 21Z" fill="white"/>
                                        </svg>
                                    </div>
                                </a>
                                <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
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
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
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
        </section>
        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}
// [webinars-list posts="6" order="date"]
?>