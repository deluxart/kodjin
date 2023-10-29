<?php
/*
* Template Name: Page: Whitepapers
*/

get_header();
?>

    <main id="whitepapers" class="whitepapers-archive">

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
                <h2 data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="200"><?php the_title(); ?></h2>
            </div>
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'whitepapers',
                'posts_per_page' => 6,
                'paged' => $paged
            );

            // The Query
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { $i = 1; ?>
                <div class="whitepapers">
                        <?php while ( $the_query->have_posts() ) : $i++; $the_query->the_post();
                            $whitepapers = get_the_terms( get_the_ID(), 'whitepapercat' );
                        ?>
                            <div class="card" data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $i; ?>00">
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
                                    <?php if( has_term('', 'whitepapercat') ){
                                        echo '<ul class="tags">';
                                        foreach ( $whitepapers as $whitepaper ) {
                                            $children = $whitepaper->name;
                                            echo '<li><span>';
                                            echo $children;
                                            echo '</span></li>';
                                        }
                                        echo '</ul>';
                                    } ?>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <?php } ?>

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
