<?php
/*
* Template Name: Page: What is FHIR
*/

get_header();
$section_bg_image = get_field( 'section_bg_image' );
?>

    <main id="solution_page" class="what_is_fhir">

        <section id="head_slide" class="what_is_fhir" style="background-image: url('<?php echo esc_url( $section_bg_image['url'] ); ?>'); background-repeat: no-repeat; background-size: cover">
            <div class="container">
                <div class="row">
                    <div class="head_text">
                        <h1
                                data-aos="fade-up"
                                data-aos-easing="ease"
                                data-aos-duration="1000"
                                data-aos-delay="100"
                        >
                            <?php the_field( 'heading_h1' ); ?>
                        </h1>
                        <div class="description" data-aos="fade-up"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200">
                            <?php the_field( 'description_head' ); ?>
                        </div>
                        <div class="actions" data-aos="fade-up"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="300">
                            <?php if ( have_rows( 'actions_head' ) ) : ?>
                                <?php while ( have_rows( 'actions_head' ) ) : the_row(); ?>
                                    <?php if ( have_rows( 'download_the_full_guide' ) ) : ?>
                                        <?php while ( have_rows( 'download_the_full_guide' ) ) : the_row(); ?>
                                            <button class="btn white da-modal" data-name="kodjin_white_paper"><?php the_sub_field( 'title' ); ?></button>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php $image_head = get_field( 'image_head' ); ?>
                    <?php if ( $image_head ) : ?>
                        <div class="image" data-aos="fade-left"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="400">
                            <img src="<?php echo esc_url( $image_head['url'] ); ?>" alt="<?php echo esc_attr( $image_head['alt'] ); ?>" />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="fhir_server">
            <div class="container">
                <div class="head mb-32 tc">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_guide_includes' ); ?></h2>
                    </div>
                    <p data-aos="fade-up"
                       data-aos-easing="ease"
                       data-aos-duration="1000"
                       data-aos-delay="200"><?php the_field( 'section_description_guide_includes' ); ?></p>
                </div>
                <div class="cards">
                    <?php if ( have_rows( 'cards_kodjin_guide_includes' ) ) : $f_is_card = 1; ?>
                        <?php while ( have_rows( 'cards_kodjin_guide_includes' ) ) : the_row(); $f_is_card++; ?>
                            <?php $image = get_sub_field( 'image' ); ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $f_is_card; ?>00" class="card">
                                <div>
                                    <div class="cont">
                                        <h3><?php the_sub_field( 'title' ); ?></h3>
                                        <div class="text">
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="what_is_fhir_section">
            <div class="container">
                <div class="row">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_what_is_fhir' ); ?></h2>
                    </div>
                    <?php if ( have_rows( 'cards_kodjin_what_is_fhir' ) ) : $ck_card = 1; ?>
                        <div>
                            <div class="cards">
                            <?php while ( have_rows( 'cards_kodjin_what_is_fhir' ) ) : the_row(); $ck_card++; ?>
                                <div data-aos="fade-up"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="<?php echo $ck_card; ?>00" class="card gray">
                                    <div class="cont">
                                        <div class="text">
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="check_all_features da-modal" data-name="kodjin_white_paper">
            <div class="container">
                <div class="row">
                    <div class="image">
                        <img data-aos="fade-left"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200" src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/07/fhir_img_articles.png" alt="fhir_img_articles" />
                    </div>
                    <div class="block" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_know_more' ); ?></h2>
                        <?php if ( have_rows( 'download_the_full_guide_know_more' ) ) : ?>
                            <div class="actions">
                                <?php while ( have_rows( 'download_the_full_guide_know_more' ) ) : the_row(); ?>
                                    <button class="btn white"><?php the_sub_field( 'title' ); ?></button>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>


        <section id="why_fhir">
            <div class="container">
                <div class="head mb-32 tc">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_fhir_is_future' ); ?></h2>
                    </div>
                    <p data-aos="fade-up"
                       data-aos-easing="ease"
                       data-aos-duration="1000"
                       data-aos-delay="200"><?php the_field( 'section_description_fhir_is_future' ); ?></p>
                </div>
                <div class="cards">
                    <?php if ( have_rows( 'cards_fhir_is_future' ) ) : $f_is_card = 1; ?>
                        <?php while ( have_rows( 'cards_fhir_is_future' ) ) : the_row(); $f_is_card++; ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $f_is_card; ?>00" class="card">
                                <div>
                                    <div class="cont">
                                        <?php $icon = get_sub_field( 'icon' ); ?>
                                        <?php if ( $icon ) : ?>
                                            <div class="icon">
                                                <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                            </div>
                                        <?php endif; ?>
                                        <h3><?php the_sub_field( 'title' ); ?></h3>
                                        <div class="text">
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <?php if ( have_rows( 'foot_card_fhir_is_future' ) ) : ?>
                <div class="foot_card" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000" data-aos-delay="200">
                    <?php while ( have_rows( 'foot_card_fhir_is_future' ) ) : the_row(); ?>
                        <?php $logo = get_sub_field( 'logo' ); ?>
                        <?php if ( $logo ) : ?>
                            <div class="logo">
                                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="text">
                            <?php the_sub_field( 'text' ); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>


        <section id="after_reading" class="what_is_fhir_section">
            <div class="container">
                <div class="row">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_after_reading' ); ?></h2>
                    </div>
                    <div>
                        <?php if ( have_rows( 'items_after_reading' ) ) : $ar_i = 1; ?>
                            <ul class="list">
                                <?php while ( have_rows( 'items_after_reading' ) ) : the_row(); $ar_i++; ?>
                                    <li data-aos="fade-up"
                                        data-aos-easing="ease"
                                        data-aos-duration="1000"
                                        data-aos-delay="<?php echo $ar_i; ?>00">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="29" cy="29" r="29" fill="black"/>
                                            <path d="M18.0391 28.7337L26.368 37.8375L39.9597 20.1631" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                        </svg>
                                        <span><?php the_sub_field( 'item' ); ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="pattern"></div>
        </section>

        <section id="we_talk" class="what_is_fhir_section">
            <div class="container">
                <div class="row">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_we_talk' ); ?></h2>
                    </div>
                    <div>
                        <div class="text" data-aos="fade-up"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200">
                            <?php the_field( 'section_description_we_talk' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="interoperability">
            <div class="container">
                <div class="head tc mb-32" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <h2><?php the_field( 'section_title_interoperability' ); ?></h2>
                </div>
                <div class="cards">
                    <?php if ( have_rows( 'cards_interoperability' ) ) : $int_card = 1; ?>
                        <?php while ( have_rows( 'cards_interoperability' ) ) : the_row(); $int_card++; ?>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $int_card; ?>00" class="card gray" onclick="window.location.href = '<?php echo esc_url( $link); ?>'; return false;">
                                <div>
                                    <div class="cont">
                                        <h3><?php the_sub_field( 'title' ); ?></h3>
                                        <div class="text">
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    </div>
                                    <?php if ( $link ) : ?>
                                        <a href="<?php echo esc_url( $link); ?>" class="read link">
                                            <svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if ( have_rows( 'foot_card_interoperability' ) ) : ?>
                    <div class="foot_card" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000" data-aos-delay="200">
                        <?php while ( have_rows( 'foot_card_interoperability' ) ) : the_row(); ?>
                            <div class="text">
                                <?php the_sub_field( 'text' ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>


        <section class="check_all_features da-modal" data-name="kodjin_white_paper">
            <div class="container">
                <div class="row">
                    <div class="image">
                        <img data-aos="fade-left"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200" src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/07/fhir_img_articles.png" alt="fhir_img_articles" />
                    </div>
                    <div class="block" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_know_more' ); ?></h2>
                        <?php if ( have_rows( 'download_the_full_guide_know_more' ) ) : ?>
                            <div class="actions">
                                <?php while ( have_rows( 'download_the_full_guide_know_more' ) ) : the_row(); ?>
                                    <button class="btn white"><?php the_sub_field( 'title' ); ?></button>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>


        <section id="blog" class="blog_section">
            <div class="container">
                <div class="head mb-32">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_blog' ); ?></h2>
                    </div>
                    <div data-aos="fade-left"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="200" class="more">
                        <a href="<?php echo get_home_url(); ?>/resources/" class="read_more">
                            <span>All updates</span>
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <?php
                    $blog_cat_list = get_field('section_blog_categories');
                    $blog_query_args = array(
                        'posts_per_page' => 6,
                        'category__in' => $blog_cat_list,
                    );
                ?>

                <?php if ( $blog_cat_list ) : ?>
                    <div class="articles">
                        <div class="swiper-wrapper">
                            <?php
                                $blog_query = new WP_Query( $blog_query_args );
                                $bc = 1;
                                    while( $blog_query->have_posts() ): $bc++;
                                        $blog_query->the_post();
                                        get_template_part( 'template-parts/article-card-img', get_post_format() );
                                    endwhile;
                                wp_reset_postdata();
                            ?>
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
                <?php endif; ?>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <div class="head mb-32">
                    <div data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <h2><?php the_field( 'section_title_faq' ); ?></h2>
                    </div>
<!--                    <div data-aos="fade-left"-->
<!--                         data-aos-easing="ease"-->
<!--                         data-aos-duration="1000"-->
<!--                         data-aos-delay="200" class="more">-->
<!--                        <a href="#" class="read_more">-->
<!--                            <span>All questions and answers</span>-->
<!--                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                    </div>-->
                </div>
                <div class="questions">
                    <div class="list">
                        <?php if ( have_rows( 'list_faq' ) ) : $fl = 1; ?>
                            <?php while ( have_rows( 'list_faq' ) ) : the_row(); $fl++; ?>
                                <div data-aos="fade-up"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="<?php echo $fl; ?>00" class="spoiler">
                                    <div class="head"><?php the_sub_field( 'question' ); ?><div class="openClose"></div></div>
                                    <div class="cont"><?php the_sub_field( 'answer' ); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_footer();
