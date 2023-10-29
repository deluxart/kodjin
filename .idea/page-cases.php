<?php
/*
* Template Name: Page: Cases
*/

get_header();
?>

    <main id="cases" class="cases-archive">

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
                'post_type' => 'cases',
                'posts_per_page' => 5,
                'paged' => $paged
            );

            // The Query
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { $i = 1; ?>
                <div class="cards lightGray">
                        <?php while ( $the_query->have_posts() ) : $i++; $the_query->the_post();
                            $cases = get_the_terms( get_the_ID(), 'casecat' );
                        ?>
                            <?php $image = get_field( 'case_image' ); ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $i; ?>00" class="card<?php if ( $image ) : ?> with_img<?php endif; ?><?php if ( get_field( 'press_picture' ) == 1 ) : ?> fix_img<?php endif; ?>" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">
                                <?php if ( $image ) : ?>
                                    <div class="image">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="text_wrap">
                                    <div class="cont">
                                        <?php if( has_term('', 'casecat') ){
                                            echo '<ul class="tags">';
                                            foreach ( $cases as $case ) {
                                                $children = $case->name;
                                                echo '<li><span>';
                                                echo $children;
                                                echo '</span></li>';
                                            }
                                            echo '</ul>';
                                        } ?>
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
