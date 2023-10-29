<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodjin
 */

$user_id = get_the_author_meta('ID');
$user_position = get_field('user_position', 'user_'. $user_id );
$description = get_field('description', 'user_'. $user_id );
$user_linkedin = get_field('linkedin', 'user_'. $user_id );
$user_mail = get_field('mail', 'user_'. $user_id );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <div>
            <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>
    <div class="post_wrap">


        <div>
            <header class="entry-header">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <div class="date">
                            <?php kodjin_posted_on(); ?>
                        </div>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kodjin' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kodjin' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->
        </div>


        <div class="sidebar">
            <div class="author card">
                <div>
                    <div class="photo">
                        <?php
                        //Assuming $post is in scope
                        if (function_exists ( 'mt_profile_img' ) ) {
                            global $post;
                            $author_id = $post->post_author;
                            mt_profile_img( $author_id, array(
                                    'size' => 'thumbnail',
                                    'attr' => array( 'alt' => $author_id->display_name ),
                                    'echo' => true )
                            );
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/No-photo-m.png" alt="" />
                        <?php } ?>
                    </div>
                </div>
                <div class="info">
                    <h4><?php the_author(); ?></h4>
                    <?php if ($user_position) { ?>
                        <p class="position"><?php echo $user_position; ?></p>
                    <?php } ?>
                    <?php if ($description) { ?>
                        <p class="description"><?php echo $description; ?></p>
                    <?php } ?>
                    <?php if ($user_linkedin || $user_mail) { ?>
                        <ul>
                            <?php if ($user_linkedin) { ?>
                                <li>
                                    <a href="<?php echo $user_linkedin; ?>" target="_blank">
                                        <svg height="20px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M50.837,48.137V36.425c0-6.275-3.35-9.195-7.816-9.195  c-3.604,0-5.219,1.983-6.119,3.374V27.71h-6.79c0.09,1.917,0,20.427,0,20.427h6.79V36.729c0-0.609,0.044-1.219,0.224-1.655  c0.49-1.22,1.607-2.483,3.482-2.483c2.458,0,3.44,1.873,3.44,4.618v10.929H50.837z M22.959,24.922c2.367,0,3.842-1.57,3.842-3.531  c-0.044-2.003-1.475-3.528-3.797-3.528s-3.841,1.524-3.841,3.528c0,1.961,1.474,3.531,3.753,3.531H22.959z M34,64  C17.432,64,4,50.568,4,34C4,17.431,17.432,4,34,4s30,13.431,30,30C64,50.568,50.568,64,34,64z M26.354,48.137V27.71h-6.789v20.427  H26.354z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#007AB9;"/></svg>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ($user_mail) { ?>
                                <li>
                                    <a href="<?php echo $user_mail; ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <g opacity="0.7">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.6667 28C26.508 28 28 26.508 28 24.6667V7.33333C28 5.492 26.508 4 24.6667 4H7.33333C5.49267 4 4 5.492 4 7.33333V24.6667C4 26.508 5.49267 28 7.33333 28H24.6667ZM11.3333 12.6667H8V24H11.3333V12.6667ZM9.638 11.3333H9.65667C10.69 11.3333 11.3333 10.5913 11.3333 9.666C11.3147 8.72 10.69 8 9.676 8C8.66333 8 8 8.72 8 9.666C8 10.592 8.64333 11.3333 9.638 11.3333ZM20.6667 24H24L23.9993 17.516C23.9993 14.1667 22.2107 12.6667 19.8253 12.6667C17.9 12.6667 17.1473 13.6667 16.6667 14.4107V12.6667H13.3333V24H16.6667V18C16.6667 17.9444 16.6658 17.8794 16.6649 17.8088C16.6605 17.4658 16.6544 16.9889 16.734 16.7953C16.9967 16.1433 17.538 15.4687 18.5387 15.4687C19.85 15.4687 20.6667 16.4687 20.6667 17.934V24Z" fill="black"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>

            <?php $attach_whitepaper = get_field( 'attach_whitepaper' ); ?>
            <?php if ( $attach_whitepaper ) : ?>
                <div class="card whitepaper">
                    <?php $post = $attach_whitepaper; ?>
                    <?php setup_postdata( $post ); ?>
                    <?php $wallpaper_whitepaper = get_field( 'wallpaper_whitepaper' ); ?>
                    <?php if ( $wallpaper_whitepaper ) : ?>
                        <div class="image">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $wallpaper_whitepaper['url'] ); ?>" alt="<?php echo esc_attr( $wallpaper_whitepaper['alt'] ); ?>" /></a>
                        </div>
                    <?php endif; ?>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="btn dark">Download</a>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>

            <?php else : ?>
                <div class="card whitepaper">
                    <?php $wallpaper_whitepaper = get_field( 'wallpaper_whitepaper', 1199 ); ?>
                    <?php if ( $wallpaper_whitepaper ) : ?>
                        <div class="image">
                            <a href="<?php the_permalink(1199); ?>"><img src="<?php echo esc_url( $wallpaper_whitepaper['url'] ); ?>" alt="<?php echo esc_attr( $wallpaper_whitepaper['alt'] ); ?>" /></a>
                        </div>
                    <?php endif; ?>
                    <div>
                        <a href="<?php the_permalink(1199); ?>">
                            <h4><?php echo get_the_title(1199); ?></h4>
                        </a>
                        <a href="<?php the_permalink(1199); ?>" class="btn dark">Download</a>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>


    <?php
    $current_post_id = get_the_ID();
    $category_id = get_the_category()[0]->term_id;

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'category__in' => array($category_id),
        'post__not_in' => array($current_post_id),
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) { ?>
    <section id="blog" class="blog_section">
        <div class="head mb-32">
            <div>
                <h2 data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="100">More article about FHIR</h2>
            </div>
        </div>


        <div class="articlesCols">
            <div class="swiper-wrapper">
    <?php
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part( 'template-parts/article-card-img', get_post_format() );
        }
        wp_reset_postdata(); ?>

            </div>
<!--            <button class="slider-nav button-prev">-->
<!--                <svg width="100%" height="100%" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <circle cx="29" cy="29" r="27.5" transform="rotate(-180 29 29)" fill="white" stroke="black" stroke-width="3"/>-->
<!--                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.674 29.3517L23.022 28.2079L32.0355 20.5601C32.6672 20.0241 33.6138 20.1017 34.1497 20.7334C34.6857 21.3651 34.6081 22.3116 33.9764 22.8476L26.3109 29.3517L33.9764 35.8558C34.6081 36.3918 34.6857 37.3383 34.1497 37.97C33.6138 38.6017 32.6672 38.6793 32.0355 38.1433L23.022 30.4955L21.674 29.3517Z" fill="black"/>-->
<!--                </svg>-->
<!--            </button>-->
<!--            <button class="slider-nav button-next">-->
<!--                <svg width="100%" height="100%" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <circle cx="29" cy="29" r="27.5" fill="white" stroke="black" stroke-width="3"/>-->
<!--                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.326 28.6483L34.978 29.7921L25.9645 37.4399C25.3328 37.9759 24.3862 37.8983 23.8503 37.2666C23.3143 36.6349 23.3919 35.6884 24.0236 35.1524L31.6891 28.6483L24.0236 22.1442C23.3919 21.6082 23.3143 20.6617 23.8503 20.03C24.3862 19.3983 25.3328 19.3207 25.9645 19.8567L34.978 27.5045L36.326 28.6483Z" fill="black"/>-->
<!--                </svg>-->
<!--            </button>-->
        </div>
    </section>
        <?php } ?>



</article><!-- #post-<?php the_ID(); ?> -->
