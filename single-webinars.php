<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kodjin
 */

get_header();
$webinars = get_the_terms( get_the_ID(), 'webinarcat' );
global $post;
$post_slug = $post->post_name;
?>

    <main id="webinar" class="webinar-single">

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
                <div class="wrap_webinar" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="200">
                    <?php if ( get_field( 'submitting_a_form_before_viewing' ) == 1 ) : ?>
                    <div class="wrap_form">
                        <div class="form">
                            <h2>Please enter your email to get access to the webinar</h2>
                            <div class="kodjin_contact_from" data-name="webinar_<?php echo $post_slug; ?>">
                                <?php echo do_shortcode('[contact-form-7 id="1241" title="Webinar"]') ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="webinar">
                        <iframe width="560" height="315" src="<?php the_field( 'video_url_webinar' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" class="video" allowfullscreen></iframe>
                    </div>
                </div>
                <?php if( has_term('', 'webinarcat') ){
                    echo '<ul class="tags" data-aos="fade-left"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="200">';
                    foreach ( $webinars as $webinar ) {
                        $children = $webinar->name;
                        echo '<li><span>';
                        echo $children;
                        echo '</span></li>';
                    }
                    echo '</ul>';
                } ?>
                <h1 data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="300"><?php the_field( 'title_webinar' ); ?></h1>
                <?php if (get_field( 'description_webinar' )) { ?>
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="400" class="description">
                        <?php the_field( 'description_webinar' ); ?>
                    </div>
                <?php } ?>
<!--                --><?php //share_article_block(); ?>
            </div>
        </div>
        <section id="check_all_features" class="check_all_features">
            <div class="container">
                <div class="image" style="transform: translateY(-49%)">
                    <img data-aos="fade-left"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="200" src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/07/fhir_img_articles.png" alt="" />
                </div>
                <div class="block" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <h2>Would you like to download <br/>White Paper?</h2>
                    <p>The only guide you will need</p>
                    <div class="actions">
                        <button data-name="kodjin_white_paper" class="da-modal btn white">Contact us</button>
                    </div>
                </div>
            </div>
        </section>
        <?php echo do_shortcode('[webinars-list posts="6" order="date" title="More webinars"]') ?>

        <?php
        $args_latest = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query_latest = new WP_Query($args_latest);

        if ($query_latest->have_posts()) { ?>
            <section id="latest-posts" class="latest_posts_section">
                <div class="container">
                <div class="head mb-32">
                    <div>
                        <h2 data-aos="fade-up"
                            data-aos-easing="ease"
                            data-aos-duration="1000"
                            data-aos-delay="100">Latest Articles</h2>
                    </div>
                </div>

                <div class="articlesCols">
                    <div class="swiper-wrapper">
                        <?php
                        while ($query_latest->have_posts()) {
                            $query_latest->the_post();
                            get_template_part('template-parts/article-card-img', get_post_format());
                        }
                        wp_reset_postdata(); ?>
                    </div>
                </div>
                </div>
            </section>
        <?php } ?>

    </main><!-- #main -->

<?php
get_footer();
