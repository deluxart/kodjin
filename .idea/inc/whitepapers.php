<?php
add_action( 'init', 'register_whitepapers_post_type' );
function register_whitepapers_post_type() {
    register_taxonomy('whitepapercat', array('whitepapers'), array(
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
        'description'           => 'Categories for whitepapers',
        'public'                => false,
        'show_in_nav_menus'     => false,
        'show_in_rest'          => true,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'show_admin_column'     => true,
    ) );

    register_post_type('whitepapers', array(
        'label'               => 'Whitepapers',
        'labels'              => array(
            'name' => 'Whitepapers',
            'singular_name' => 'Whitepaper',
            'add_new' => 'Add whitepaper',
            'add_new_item' => 'Add new whitepaper',
            'edit_item' => 'Edit whitepaper',
            'new_item' => 'New whitepaper',
            'all_items' => 'All whitepapers',
            'search_items' => 'Whitepaper search',
            'menu_name' => 'Whitepapers'
        ),
        'menu_icon' => 'dashicons-media-document',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'menu_position' 	  => 4,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'           => array(
            'slug' => 'whitepapers',
            'with_front' => false
        ),
        'has_archive'         => true,
        'query_var'           => true,
        'show_in_rest' 		  => true,
        'supports'            => array( 'title', 'thumbnail', 'revisions' ),
    ) );
}

add_shortcode( 'whitepapers-list', 'other_whitepapers_shortcode' );

function other_whitepapers_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'whitepapers',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'category' => '',
        'post_status' => 'publish',
        'public'   => true,
        'with_icon' => false,
        'hide_title' => false,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'order' => $args['order'],
        'orderby' => $args['orderby'],
        'posts_per_page' => $args['posts'],
        'category_name' => $args['category'],
        'post__not_in' => array( get_the_ID() ),
        'with_icon' => $args['with_icon'],
        'hide_title' => $args['hide_title'],
        'post_status' => 'publish'
    );

    $query = new WP_Query( $options );
    $with_icon = $options['with_icon'];
    $hide_title = $options['hide_title'];
    if ( $query->have_posts() ) { $i = 1; ?>
        <div class="other_whitepapers">
        <?php if (!$with_icon) { ?><h2 data-aos="fade-up"
                data-aos-easing="ease"
                data-aos-duration="1000"
                data-aos-delay="100">Other White papers</h2><?php } ?>
            <div class="other_whitepapers_slider">
                <div class="swiper-wrapper">
                <?php while ( $query->have_posts() ) : $query->the_post(); $i++; ?>
                    <div class="card swiper-slide" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="<?php echo $i; ?>00">
                        <div>
                            <?php if ($with_icon) { ?>
                            <a href="<?php the_permalink() ?>"><div class="image icon">
                                    <svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4H22H23.8937C28.3915 4 32.6518 6.01887 35.5 9.5L35.636 9.65111C38.4455 12.7727 40 16.8238 40 21.0235V25V46H4V4Z" fill="black" stroke="black" stroke-width="8"/>
                                        <path d="M12.3445 25.2002C13.1938 25.2002 13.9312 25.3402 14.5565 25.6202C15.1912 25.9002 15.6765 26.3015 16.0125 26.8242C16.3485 27.3469 16.5165 27.9675 16.5165 28.6862C16.5165 29.3955 16.3485 30.0162 16.0125 30.5482C15.6765 31.0709 15.1912 31.4722 14.5565 31.7522C13.9312 32.0322 13.1938 32.1722 12.3445 32.1722H10.1325V35.0002H8.3125V25.2002H12.3445ZM12.2605 30.6322C13.0538 30.6322 13.6558 30.4642 14.0665 30.1282C14.4772 29.7922 14.6825 29.3115 14.6825 28.6862C14.6825 28.0609 14.4772 27.5802 14.0665 27.2442C13.6558 26.9082 13.0538 26.7402 12.2605 26.7402H10.1325V30.6322H12.2605Z" fill="white"/>
                                        <path d="M18.334 25.2002H22.618C23.6633 25.2002 24.592 25.4055 25.404 25.8162C26.216 26.2175 26.846 26.7915 27.294 27.5382C27.742 28.2755 27.966 29.1295 27.966 30.1002C27.966 31.0709 27.742 31.9295 27.294 32.6762C26.846 33.4135 26.216 33.9875 25.404 34.3982C24.592 34.7995 23.6633 35.0002 22.618 35.0002H18.334V25.2002ZM22.534 33.4602C23.2527 33.4602 23.8827 33.3249 24.424 33.0542C24.9747 32.7742 25.3947 32.3822 25.684 31.8782C25.9827 31.3649 26.132 30.7722 26.132 30.1002C26.132 29.4282 25.9827 28.8402 25.684 28.3362C25.3947 27.8229 24.9747 27.4309 24.424 27.1602C23.8827 26.8802 23.2527 26.7402 22.534 26.7402H20.154V33.4602H22.534Z" fill="white"/>
                                        <path d="M31.7204 26.7262V29.7082H36.4524V31.2482H31.7204V35.0002H29.9004V25.2002H37.0544V26.7262H31.7204Z" fill="white"/>
                                        <path d="M26 8V17H34V16.4783C34 14.267 33.1361 12.1432 31.5924 10.5599L31.2585 10.2174C29.8763 8.79958 27.9801 8 26 8Z" fill="white"/>
                                    </svg>
                                </div></a>
                            <?php } else { ?>
                                <?php $wallpaper_whitepaper = get_field( 'wallpaper_whitepaper' ); ?>
                                <?php if ( $wallpaper_whitepaper ) : ?>
                                    <div class="image">
                                        <img src="<?php echo esc_url( $wallpaper_whitepaper['url'] ); ?>" alt="<?php echo esc_attr( $wallpaper_whitepaper['alt'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                            <?php } ?>
                        </div>
                        <div>
                            <a href="<?php the_permalink() ?>"><h4><?php the_field( 'title_whitepaper' ); ?></h4></a>
                            <?php
                            $wp_postTags = get_the_tags();

                            if ($wp_postTags) {
                                echo '<ul class="tags">';
                                foreach ($wp_postTags as $tag) {
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
                <?php endwhile; wp_reset_postdata(); ?>
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
        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}
// [whitepapers-list posts="6" order="date"]
?>