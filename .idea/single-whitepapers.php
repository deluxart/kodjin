<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kodjin
 */

get_header();
global $post;
$post_slug = $post->post_name;
?>

	<main id="whitepaper" class="whitepaper-single">

		<div class="container">
            <div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <div data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                </div>
            </div>

            <div class="content">
                <div class="image_btn">
                    <?php $wallpaper_whitepaper = get_field( 'wallpaper_whitepaper' ); ?>
                    <?php if ( $wallpaper_whitepaper ) : ?>
                        <div class="image" data-aos="fade-right"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="100">
                            <img src="<?php echo esc_url( $wallpaper_whitepaper['url'] ); ?>" alt="<?php echo esc_attr( $wallpaper_whitepaper['alt'] ); ?>" />
                        </div>
                    <?php endif; ?>
                    <?php $whitepaper_file = get_field( 'whitepaper_file' ); ?>
                    <?php if ( $whitepaper_file ) : ?>
                        <a href="#wp_form" class="btn dark" data-aos="fade-up"
                           data-aos-easing="ease"
                           data-aos-duration="1000"
                           data-aos-delay="300">
                            <span>Download  Whitepaper</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="12" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.581 14.4872L11.9623 14.9365L12.3435 14.4872L14.5219 11.9199C14.7005 11.7093 14.6747 11.3938 14.4641 11.2151C14.2535 11.0365 13.938 11.0623 13.7594 11.2729L12.461 12.8031L12.461 6.5C12.461 6.22386 12.2371 6 11.961 6C11.6848 6 11.461 6.22386 11.461 6.5L11.461 12.8001L10.1652 11.2729C9.98655 11.0623 9.67103 11.0365 9.46046 11.2151C9.2499 11.3938 9.22404 11.7093 9.4027 11.9199L11.581 14.4872Z" fill="black"/>
                                <path d="M8 16.9321H16" stroke="black" stroke-linecap="round"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="details" data-aos="fade-left"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="200">
                    <h2><?php the_field( 'title_whitepaper' ); ?></h2>
                    <div class="date"><?php echo get_the_date('F j, Y'); ?></div>
                    <div class="post-text">
                        <?php the_field( 'description_whitepaper' ); ?>
                    </div>
                </div>
            </div>
            <div class="contactForm white_paper" id="wp_form" data-aos="fade-up"
                 data-aos-easing="ease"
                 data-aos-duration="1000"
                 data-aos-delay="100">
                <div class="form">
                    <h2>Download Kodjin White Paper</h2>
                    <?php $whitepaper_form_id = get_field( 'whitepaper_form_id' ); ?>
                    <div class="kodjin_contact_from" data-name="<?php if ( $whitepaper_form_id ) : ?><?php echo $whitepaper_form_id; ?><?php else: ?>wp_<?php echo $post_slug; ?><?php endif; ?>" data-file="<?php if ( $whitepaper_file ) : ?><?php the_field( 'whitepaper_file' ); ?><?php endif; ?>" data-file-name="<?php if ( $whitepaper_file ) : ?><?php the_field( 'title_whitepaper' ); ?><?php endif; ?>">
                        <?php echo do_shortcode('[contact-form-7 id="198" title="Kodjin White Paper"]') ?>
                    </div>
                </div>
            </div>

            <?php echo do_shortcode('[whitepapers-list posts="6" order="date"]') ?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
