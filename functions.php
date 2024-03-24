<?php
/**
 * kodjin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kodjin
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kodjin_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on kodjin, use a find and replace
		* to change 'kodjin' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kodjin', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'kodjin' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'kodjin_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'kodjin_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kodjin_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kodjin_content_width', 640 );
}
add_action( 'after_setup_theme', 'kodjin_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kodjin_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer #1', 'kodjin' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here.', 'kodjin' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer #2', 'kodjin' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'kodjin' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer #3', 'kodjin' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'kodjin' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer #4', 'kodjin' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add widgets here.', 'kodjin' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        )
    );
}
add_action( 'widgets_init', 'kodjin_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kodjin_scripts() {
	wp_enqueue_style( 'kodjin-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'kodjin-styles', get_template_directory_uri() . '/assets/styles/styles.css?0403202444', array(), '0403202444' );
    wp_enqueue_style( 'kodjin-swiper', get_template_directory_uri() . '/assets/styles/libs/swiper.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'kodjin-liMarquee', get_template_directory_uri() . '/assets/styles/libs/liMarquee.css', array(), _S_VERSION );
    wp_enqueue_style( 'kodjin-aos', get_template_directory_uri() . '/assets/styles/libs/aos.css', array(), _S_VERSION );
    wp_enqueue_style( 'kodjin-select2', get_template_directory_uri() . '/assets/styles/libs/select2.min.css', array(), _S_VERSION );

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'kodjin-sourcebuster', get_template_directory_uri() . '/assets/js/libs/sourcebuster.min.js', array(), '312345', true );
	wp_enqueue_script( 'kodjin-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'kodjin-swiper', get_template_directory_uri() . '/assets/js/libs/swiper.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'kodjin-liMarquee', get_template_directory_uri() . '/assets/js/libs/jquery.liMarquee.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'kodjin-select2', get_template_directory_uri() . '/assets/js/libs/select2.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'kodjin-aos', get_template_directory_uri() . '/assets/js/libs/aos.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'kodjin-megamenu', get_template_directory_uri() . '/assets/js/megamenu.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'kodjin-main', get_template_directory_uri() . '/assets/js/main.js?11122023', array(), '11122023', true );
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array(), '090108023', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kodjin_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Services
 */
require get_template_directory() . '/inc/services.php';
/**
 * Webinars
 */
require get_template_directory() . '/inc/webinars.php';
/**
 * Whitepapers
 */
require get_template_directory() . '/inc/whitepapers.php';
/**
 * Cases
 */
require get_template_directory() . '/inc/cases.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Remove <p> Tag From Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

function my_mce4_options($init) {

    $custom_colours = '
        "FF6900", "Orange color",
        "808080", "Gray color"
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colours.']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');



add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title' 	=> 'Universal sections',
            'menu_title'	=> 'Universal sections',
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

// Active link for wp_list_categories
function tax_cat_active( $output, $args ) {

    if(is_single()){
        global $post;

        $terms = get_the_terms( $post->ID, $args['taxonomy'] );
        foreach( $terms as $term )
            if ( preg_match( '#cat-item-' . $term ->term_id . '#', $output ) ) {
                $output = str_replace('cat-item-'.$term ->term_id, 'cat-item-'.$term ->term_id . ' current-cat', $output);
            }

    }

    return $output;
}
add_filter( 'wp_list_categories', 'tax_cat_active', 10, 2 );

function recent_posts_shortcode( $atts ) {
	ob_start();
	$args = shortcode_atts( array (
		'type' => 'post',
		'posts' => 6,
		'public'   => true,
		'order'   => 'DESC',
		'orderby' => 'post_date',
		'offset'  => 0,
		'category' => '',
		'image' => false,
		'link_icon' => false,
		'slides' => false,
	), $atts );
	$options = array(
		'post_type' => $args['type'],
		'posts_per_page' => $args['posts'],
		'post_status' => 'publish',
		'offset' => $args['offset'],
		'category_name' => $args['category'],
		'image' => $args['image'],
		'link_icon' => $args['link_icon'],
		'slides' => $args['slides'],
	);

	$query = new WP_Query( $options );
    $image = $options['image'];
    $link_icon = $options['link_icon'];
    $slides = $options['slides'];

	if ( $query->have_posts() ) { $bc = 1; ?>
		<?php while ( $query->have_posts() ) : $query->the_post();  $bc++; ?>
			<div class="articleCard<?php if ($slides) { ?> swiper-slide<?php } ?>" onclick="window.location.href = '<?php the_permalink() ?>'; return false;" data-aos="fade-up"
                 data-aos-easing="ease"
                 data-aos-duration="1000"
                 data-aos-delay="<?php echo $bc; ?>00">

                <?php if ($image) { ?>
                <?php
                $post_wallpaper = get_field('post_wallpaper');
                if ($post_wallpaper) {
                    ?>
                    <div class="image">
                        <img src="<?php echo esc_url($post_wallpaper['url']); ?>" alt="<?php echo esc_attr($post_wallpaper['alt']); ?>" />
                    </div>
                <?php } elseif (has_post_thumbnail()) { ?>
                    <div class="image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } else { ?>
                    <div class="image no-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_no_img.jpg" alt="no-image" />
                    </div>
                <?php } ?>


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
				<?php }
				?>
                <?php if ($link_icon) { ?>
				<a href="<?php the_permalink() ?>" class="read">
					<svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
					</svg>
				</a>
                <?php } ?>
			</div>
		<?php endwhile;
		wp_reset_postdata(); ?>
		<?php $myvariable = ob_get_clean();
		return $myvariable;
	}
}
add_shortcode( 'recent_posts', 'recent_posts_shortcode' ); // [recent_posts posts="10"]

add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );
remove_filter('term_description','wpautop');

function custom_contact_form_shortcode($atts, $content = null) {
    // Разбираем атрибуты шорткода
    $atts = shortcode_atts(
        array(
            'id' => '', // ID формы Contact Form 7
            'title' => '' // Заголовок h2
        ),
        $atts,
        'custom_contact_form'
    );

    // Вставляем форму с заданными атрибутами
    $form_output = '';
    if (!empty($atts['id'])) {
        $form_output .= '<h2>' . esc_html($atts['title']) . '</h2>';
        $form_output .= do_shortcode('[contact-form-7 id="' . esc_attr($atts['id']) . '"]');
    }

    return $form_output;
}
add_shortcode('custom_contact_form', 'custom_contact_form_shortcode');

function custom_scripts() {
    wp_localize_script('custom-script', 'formID', array(
        'id' => '1241' // Webinar singe - CF Form
    ));
}
add_action('wp_enqueue_scripts', 'custom_scripts');

// Add socials
function share_article_block() {
    $permalink = get_permalink();

    $social_networks = array(
        'linkedin' => array(
            'url' => 'https://www.linkedin.com/shareArticle?url=' . urlencode($permalink),
            'icon' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1084 14.1333V35.0171H4.16696V14.1333H11.1084ZM11.5659 7.67478C11.5659 9.67886 10.0593 11.2825 7.63913 11.2825L7.59365 11.2823C5.26395 11.2823 3.75781 9.67868 3.75781 7.6746C3.75781 5.62503 5.30944 4.06616 7.68516 4.06616C10.0593 4.06616 11.5206 5.62503 11.5659 7.67478ZM21.8915 35.0171H14.9506C14.9506 35.0171 15.0416 16.0932 14.951 14.134H21.892V17.0901C22.8147 15.6674 24.4661 13.6437 28.148 13.6437C32.7148 13.6437 36.1388 16.6286 36.1388 23.043V35.0171H29.198V23.846C29.198 21.0383 28.1929 19.1234 25.6818 19.1234C23.7638 19.1234 22.6217 20.4148 22.1202 21.6624C21.9368 22.1076 21.8915 22.7326 21.8915 23.3559V35.0171Z" fill="#A2A2A2"/>
</svg>'
        ),
        'facebook' => array(
            'url' => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($permalink),
            'icon' => '<svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.5">
<path d="M27.1237 7.9775H30.5015V2.2535C29.9188 2.1755 27.9146 2 25.5805 2C20.7104 2 17.3743 4.9805 17.3743 10.4585V15.5H12V21.899H17.3743V38H23.9633V21.9005H29.1202L29.9388 15.5015H23.9618V11.093C23.9633 9.2435 24.4752 7.9775 27.1237 7.9775Z" fill="#454545"/>
</g>
</svg>'
        ),
        'twitter' => array(
            'url' => 'https://twitter.com/share?url=' . urlencode($permalink),
            'icon' => '<svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M37.8488 9.87326C36.749 10.324 35.5927 10.6379 34.4086 10.8072C34.9622 10.7168 35.7768 9.76781 36.101 9.38369C36.5936 8.80428 36.969 8.14284 37.2082 7.43296C37.2082 7.38024 37.2636 7.30492 37.2082 7.26726C37.1803 7.25276 37.149 7.24516 37.1173 7.24516C37.0855 7.24516 37.0542 7.25276 37.0263 7.26726C35.7406 7.93037 34.3722 8.43648 32.9535 8.77362C32.9041 8.788 32.8514 8.78929 32.8013 8.77735C32.7511 8.76541 32.7053 8.74068 32.6688 8.70583C32.5584 8.5806 32.4395 8.46235 32.3129 8.35184C31.7343 7.85809 31.0778 7.45398 30.3675 7.15428C29.4086 6.77963 28.3729 6.61738 27.3386 6.67978C26.3349 6.74015 25.3551 6.99652 24.4599 7.43296C23.5784 7.89309 22.8037 8.5182 22.1823 9.27071C21.5287 10.0452 21.0567 10.9441 20.7983 11.9068C20.5852 12.8226 20.5611 13.7691 20.7271 14.6936C20.7271 14.8518 20.7271 14.8744 20.5848 14.8518C14.9461 14.0609 10.3197 12.1554 6.53952 8.06563C6.37344 7.88487 6.28645 7.88487 6.15201 8.06563C4.50706 10.4457 5.30581 14.2116 7.36199 16.0719C7.63878 16.3205 7.92348 16.5615 8.224 16.7874C7.28126 16.7237 6.36154 16.4804 5.51934 16.0719C5.36117 15.974 5.27418 16.0267 5.26627 16.2075C5.24385 16.4581 5.24385 16.7101 5.26627 16.9607C5.43128 18.1617 5.92826 19.2994 6.70638 20.2575C7.48451 21.2156 8.51586 21.9597 9.69496 22.4137C9.9824 22.5309 10.2819 22.6193 10.5886 22.6773C9.71586 22.8409 8.82075 22.8664 7.9393 22.7526C7.7495 22.715 7.67832 22.8129 7.7495 22.9861C8.91203 25.9988 11.4348 26.9177 13.2854 27.4299C13.5384 27.4675 13.7915 27.4675 14.0762 27.5278C14.0762 27.5278 14.0762 27.5278 14.0288 27.573C13.4831 28.522 11.2766 29.1622 10.2644 29.4936C8.41671 30.1256 6.44676 30.3672 4.49125 30.2016C4.18282 30.1564 4.11165 30.1639 4.03256 30.2016C3.95348 30.2392 4.03256 30.3221 4.11955 30.3974C4.51497 30.6459 4.91039 30.8644 5.32163 31.0752C6.54588 31.7112 7.84016 32.2164 9.18092 32.5816C16.1245 34.4043 23.938 33.0636 29.1496 28.1303C33.2461 24.259 34.6854 18.9189 34.6854 13.5714C34.6854 13.368 34.9464 13.2475 35.0967 13.1421C36.1331 12.373 37.0468 11.4647 37.8092 10.4457C37.9413 10.2938 38.009 10.1004 37.999 9.90339C37.999 9.79041 37.999 9.813 37.8488 9.87326Z" fill="#A2A2A2"/>
</svg>'
        ),
        'whatsapp' => array(
            'url' => 'https://wa.me/?text=' . urlencode($permalink),
            'icon' => '<svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 36.2167L7.44139 27.5789C5.47247 24.2141 4.84692 20.2876 5.67954 16.52C6.51216 12.7524 8.74709 9.3964 11.9742 7.06781C15.2014 4.73922 19.2042 3.59426 23.2483 3.84302C27.2924 4.09179 31.1064 5.71759 33.9904 8.4221C36.8745 11.1266 38.6351 14.7284 38.9493 18.5666C39.2635 22.4047 38.1101 26.2218 35.7008 29.3173C33.2915 32.4128 29.7879 34.5791 25.8329 35.4188C21.878 36.2584 17.7369 35.715 14.1696 33.8883L5 36.2167ZM14.6118 30.656L15.1789 30.9756C17.7627 32.4305 20.7806 33.0325 23.7623 32.6879C26.7439 32.3433 29.5218 31.0715 31.6631 29.0705C33.8043 27.0696 35.1887 24.4519 35.6004 21.6255C36.0121 18.7992 35.428 15.9228 33.9392 13.4446C32.4504 10.9665 30.1404 9.02585 27.3693 7.92506C24.5982 6.82427 21.5216 6.6252 18.619 7.35887C15.7163 8.09254 13.1507 9.71774 11.3219 11.9812C9.49309 14.2447 8.50384 17.0192 8.5083 19.8726C8.50587 22.2384 9.19464 24.5585 10.4979 26.5746L10.8536 27.1315L9.4887 31.9526L14.6118 30.656Z" fill="#A2A2A2"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M28.3756 22.0905C28.0431 21.8358 27.6539 21.6565 27.2375 21.5663C26.8211 21.4761 26.3885 21.4774 25.9726 21.5701C25.3479 21.8166 24.9442 22.7479 24.5405 23.2136C24.4554 23.3252 24.3303 23.4035 24.1887 23.4338C24.0471 23.464 23.8988 23.4442 23.7715 23.3779C21.4843 22.5269 19.567 20.9663 18.3313 18.9495C18.2259 18.8237 18.176 18.6639 18.1921 18.5038C18.2083 18.3437 18.2892 18.1958 18.4178 18.0912C18.868 17.6678 19.1986 17.1433 19.379 16.5664C19.419 15.93 19.2655 15.2961 18.9368 14.7402C18.6827 13.961 18.1991 13.2671 17.5431 12.7406C17.2048 12.596 16.8296 12.5476 16.4629 12.601C16.0963 12.6545 15.7537 12.8076 15.4766 13.0419C14.9955 13.4362 14.6136 13.928 14.3591 14.4811C14.1046 15.0342 13.9839 15.6344 14.006 16.2377C14.0075 16.5764 14.0526 16.9137 14.1405 17.2421C14.3637 18.0309 14.707 18.7845 15.1594 19.4791C15.4858 20.0112 15.8419 20.5263 16.2263 21.0222C17.4754 22.6511 19.0455 24.0342 20.8496 25.0945C21.7548 25.6334 22.7224 26.0715 23.7331 26.4002C24.783 26.8523 25.9422 27.0259 27.0876 26.9024C27.7402 26.8086 28.3585 26.5638 28.8882 26.1897C29.4178 25.8155 29.8425 25.3234 30.1249 24.7567C30.2909 24.4144 30.3412 24.0316 30.2691 23.661C30.0961 22.9031 29.0292 22.4557 28.3756 22.0905Z" fill="#A2A2A2"/>
</svg>'
        ),
        'link' => array(
            'url' => $permalink,
            'icon' => '<svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.5">
<path d="M18.3712 27.6906L14.7415 31.1474C13.2368 32.5805 10.7999 32.5805 9.29639 31.1477C7.79258 29.7155 7.79258 27.3944 9.29609 25.9625L16.5566 19.0477C18.0601 17.6157 20.4972 17.6157 22.0008 19.0477C22.502 19.525 23.3146 19.525 23.8158 19.0477C24.3171 18.5704 24.3171 17.7964 23.8158 17.319C21.3099 14.9324 17.2475 14.9324 14.7415 17.319L7.48106 24.2338C4.97506 26.6204 4.97506 30.4893 7.48106 32.876C9.98675 35.2639 14.0494 35.2639 16.5567 32.876L20.1863 29.4192C20.6875 28.9418 20.6875 28.1679 20.1863 27.6905C19.6851 27.2132 18.8724 27.2132 18.3712 27.6906Z" fill="#454545"/>
<path d="M34.5218 7.12203C32.0158 4.73537 27.9522 4.73537 25.4462 7.12203L21.0914 11.2694C20.5902 11.7468 20.5902 12.5207 21.0914 12.9981C21.5926 13.4754 22.4053 13.4754 22.9065 12.9981L27.2613 8.85068C28.7648 7.41871 31.2032 7.41871 32.7067 8.85068C34.2102 10.2826 34.2102 12.6037 32.7067 14.0356L24.7211 21.641C23.2175 23.073 20.7804 23.073 19.2769 21.641C18.7757 21.1637 17.9631 21.1637 17.4618 21.641C16.9606 22.1184 16.9606 22.8923 17.4618 23.3697C19.9678 25.7563 24.0302 25.7563 26.5362 23.3697L34.5218 15.7643C37.0278 13.3776 37.0278 9.50868 34.5218 7.12203Z" fill="#454545"/>
</g>
</svg>'
        ),
    );

    // Выводим блок со ссылками на социальные сети
    echo '<div class="share_post" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="300">';
    echo '<span>Share article:</span>';
    echo '<ul>';
    foreach ($social_networks as $network => $settings) {
        echo '<a href="' . $settings['url'] . '" target="_blank">' . $settings['icon'] . '</a>';
    }
    echo '</ul>';
    echo '</div>';
}

function set_data_attribute_for_cf7_forms() {
    ob_start();
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            sbjs.init();

            setTimeout(() => {
                const getClientId = function() {
                    const trackers = ga.getAll();
                    if (trackers.length > 0) {
                        console.log(trackers[0].get('clientId'), 'clientId')
                        return trackers[0].get('clientId');
                    }
                    return '';
                };

                const forms = document.querySelectorAll('.kodjin_contact_from');

                forms.forEach(function(form) {
                    const dataNameAttribute = form.getAttribute('data-name'); // Form name
                    const dataFileUrl = form.getAttribute('data-file'); // Form name
                    const dataFileName = form.getAttribute('data-file-name'); // Form name

                    if (dataNameAttribute) {
                        const inputField_ID = form.querySelector('input[name="current-form-id"]'); // Current form ID
                        const inputField_timezone = form.querySelector('input[name="timezone"]'); // Current form timezone
                        const inputField_countryVal = form.querySelector('input[name="countryVal"]'); // Current form countryVal
                        const inputField_hidId = form.querySelector('input[name="hidId"]'); // Current form hidId
                        const inputField_first_source = form.querySelector('input[name="first_source"]'); // Current form first_source
                        const inputField_last_source = form.querySelector('input[name="last_source"]'); // Current form last_source
                        const inputField_first_page = form.querySelector('input[name="first_page"]'); // Current form first_page
                        const inputField_last_landing_page = form.querySelector('input[name="last_landing_page"]'); // Current form last_landing_page
                        const inputField_current_page_url = form.querySelector('input[name="current_page_url"]'); // Current form last_landing_page
                        const inputField_pdf = form.querySelector('input[name="pdf_file"]'); // PDF_File field
                        const inputField_pdfName = form.querySelector('input[name="pdf_name"]'); // PDF_Name field

                        if (inputField_pdf) {
                            inputField_pdf.setAttribute('value', dataFileUrl);
                            inputField_pdfName.setAttribute('value', dataFileName);
                        }

                        if (inputField_ID) {
                            inputField_ID.setAttribute('value', dataNameAttribute);
                            inputField_ID.setAttribute('data-name', dataNameAttribute);
                        }

                        if (inputField_timezone) {
                            inputField_timezone.setAttribute('value', Intl.DateTimeFormat().resolvedOptions().timeZone);
                            inputField_timezone.setAttribute('data-name', dataNameAttribute);
                        }

                        // if (inputField_countryVal) {
                        //     if ("geolocation" in navigator) {
                        //         navigator.geolocation.getCurrentPosition(function(position) {
                        //             const latitude = position.coords.latitude;
                        //             const longitude = position.coords.longitude;
                        //
                        //             fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`)
                        //                 .then(response => response.json())
                        //                 .then(data => {
                        //                     const country = data.countryName;
                        //                     inputField_countryVal.setAttribute('value',country);
                        //                     inputField_countryVal.dataset.name = dataNameAttribute;
                        //                 })
                        //                 .catch(error => {
                        //                     console.error("Error fetching location data:", error);
                        //                 });
                        //         });
                        //     } else {
                        //         console.log("Geolocation is not available in this browser.");
                        //     }
                        // }

                        if (inputField_countryVal) {
                            fetch('https://ipinfo.io/json')
                                .then(response => response.json())
                                .then(data => {
                                    const country = data.country;
                                    inputField_countryVal.value = country;
                                    inputField_countryVal.dataset.name = dataNameAttribute;
                                })
                                .catch(error => {
                                    console.error("Error fetching IP address:", error);
                                });
                        }

                        if (inputField_hidId) {
                            inputField_hidId.setAttribute('value', getClientId());
                            inputField_hidId.setAttribute('data-name', dataNameAttribute);
                        }

                        if (inputField_first_source) {
                            inputField_first_source.setAttribute('value', `${sbjs.get.first.src} - ${sbjs.get.first.mdm} - ${sbjs.get.first.cmp} - ${sbjs.get.first.trm}`);
                            inputField_first_source.setAttribute('data-name', dataNameAttribute);
                        }

                        if (inputField_last_source) {
                            inputField_last_source.setAttribute('value', `${sbjs.get.current.src} - ${sbjs.get.current.mdm} - ${sbjs.get.current.cmp} - ${sbjs.get.current.trm}`);
                            inputField_last_source.setAttribute('data-name', dataNameAttribute);
                        }

                        if (inputField_first_page) {
                            inputField_first_page.setAttribute('value', sbjs.get.first_add.ep);
                            inputField_first_page.setAttribute('data-name', dataNameAttribute);
                        }

                        if (inputField_last_landing_page) {
                            inputField_last_landing_page.setAttribute('value', sbjs.get.current_add.ep);
                            inputField_last_landing_page.setAttribute('data-name', dataNameAttribute);
                        }

                        if (inputField_current_page_url) {
                            inputField_current_page_url.setAttribute('value', window.location.href);
                            inputField_current_page_url.setAttribute('data-name', dataNameAttribute);
                        }
                    }
                });
            }, 5000);
        });
    </script>
    <?php
    echo ob_get_clean();
}
add_action('wp_footer', 'set_data_attribute_for_cf7_forms');

function generate_site_url_shortcode() {
    return get_site_url();
}
add_shortcode( 'site_url', 'generate_site_url_shortcode' );


/**
 * Display a custom message instead of the RSS Feeds.
 *
 * @return void
 */
function wpcode_snippet_disable_feed() {
    wp_die(
        sprintf(
        // Translators: Placeholders for the homepage link.
            esc_html__( 'No feed available, please visit our %1$shomepage%2$s!' ),
            ' <a href="' . esc_url( home_url( '/' ) ) . '">',
            '</a>'
        )
    );
}

// Replace all feeds with the message above.
add_action( 'do_feed_rdf', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss2', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_atom', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss2_comments', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_atom_comments', 'wpcode_snippet_disable_feed', 1 );
// Remove links to feed from the header.
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

function enqueue_custom_block_script() {
    wp_enqueue_script(
        'custom-block',
        get_template_directory_uri() . '/assets/js/custom-blocks-guttenberg.js',
        array('wp-blocks', 'wp-editor', 'wp-components')
    );
}

add_action('enqueue_block_editor_assets', 'enqueue_custom_block_script');


function shapeSpace_enable_gutenberg_post_ids($can_edit, $post) {
    if (empty($post->ID)) return $can_edit;
    if (5057 === $post->ID) return true;
    return $can_edit;
}

add_filter('use_block_editor_for_post', 'shapeSpace_enable_gutenberg_post_ids', 10, 2);