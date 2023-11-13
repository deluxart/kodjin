<?php
add_action( 'init', 'register_cases_post_type' );

function register_cases_post_type() {
    register_taxonomy('casecat', array('cases'), array(
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
        'description'           => 'Categories for cases',
        'public'                => true,
        'show_in_nav_menus'     => false,
        'show_in_rest'          => true,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'show_admin_column'     => true,
    ) );

    register_post_type('cases', array(
        'label'               => 'Cases',
        'labels'              => array(
            'name' => 'Cases',
            'singular_name' => 'Case',
            'add_new' => 'Add case',
            'add_new_item' => 'Add new case',
            'edit_item' => 'Edit case',
            'new_item' => 'New case',
            'all_items' => 'All cases',
            'search_items' => 'Cases search',
            'menu_name' => 'Cases'
        ),
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'menu_position' 	  => 2,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'           => array(
            'slug' => 'cases',
            'with_front' => false
        ),
        'has_archive'         => true,
        'query_var'           => true,
        'show_in_rest' 		  => true,
        'supports'            => array( 'title', 'thumbnail', 'revisions' ),
    ) );
}

add_shortcode( 'cases-list', 'other_cases_shortcode' );

function other_cases_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'cases',
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
    $cases_i = 1;

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
                        <a href="<?php echo get_home_url(); ?>/webinars/" class="read_more">
                            <span>All updates</span>
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="cards lightGray">
                    <?php if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
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
        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}

?>