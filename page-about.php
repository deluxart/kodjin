<?php
/*
* Template Name: Page: About
*/

get_header();
$section_bg_image = get_field( 'section_bg_image' );
?>

    <main id="solution_page" class="about">

        <section id="head_slide" class="about" style="background-image: url('<?php echo esc_url( $section_bg_image['url'] ); ?>'); background-repeat: no-repeat; background-size: contain;background-position: center center;background-color: #f0f0f0;">
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
                                    <?php if ( have_rows( 'contact_us' ) ) : ?>
                                        <?php while ( have_rows( 'contact_us' ) ) : the_row(); ?>
                                            <button data-name="request_demo" class="btn dark da-modal"><?php the_sub_field( 'title' ); ?></button>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div>
                        <?php if ( have_rows( 'items_head' ) ) : $ih = 3; ?>
                            <div class="items">
                                <?php while ( have_rows( 'items_head' ) ) : the_row(); $ih++; ?>
                                    <div class="item" data-aos="fade-up"
                                         data-aos-easing="ease"
                                         data-aos-duration="1000"
                                         data-aos-delay="<?php echo $ih; ?>00">
                                        <?php $icon = get_sub_field( 'icon' ); ?>
                                        <?php if ( $icon ) : ?>
                                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <p><?php the_sub_field( 'title' ); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="partners_head">
            <div class="container">
                <div class="head">
                    <h2 class="tc mb-32" data-aos="fade-up"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="100"><?php the_field( 'section_title_partners' ); ?></h2>
                </div>
                <?php if ( have_rows( 'partners_head' ) ) : ?>
                    <div class="logos mWrap" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="200">
                        <?php while ( have_rows( 'partners_head' ) ) : the_row(); ?>
                            <?php $logo = get_sub_field( 'logo' ); ?>
                            <?php if ( $logo ) : ?>
                                <img src="<?php echo esc_url( $logo['url'] ); ?>" style="opacity: 1;" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>


        <section id="why_choose_us">
            <div class="container">
                <div class="head tc mb-32">
                    <h2 data-aos="fade-up"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="100"><?php the_field( 'section_title_choose_us' ); ?></h2>
                    <p data-aos="fade-up"
                       data-aos-easing="ease"
                       data-aos-duration="1000"
                       data-aos-delay="200"><?php the_field( 'section_description_choose_us' ); ?></p>
                </div>
                <?php if ( have_rows( 'cards_kodjin_choose_us' ) ) : $ck = 2; ?>
                    <div class="cards">
                        <?php while ( have_rows( 'cards_kodjin_choose_us' ) ) : the_row(); $ck++; ?>
                            <div class="card" data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $ck; ?>00">
                                <div class="cont">
                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) : ?>
                                        <div class="icon">
                                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <?php the_sub_field( 'description' ); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>


        <section id="team">
            <div class="container">
                <div class="head mb-32">
                    <h2 data-aos="fade-up"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="100"><?php the_field( 'section_title_team' ); ?></h2>
                </div>
                <?php if ( have_rows( 'team_cards' ) ) : $t = 1; ?>
                <div class="team-cards">
                    <?php while ( have_rows( 'team_cards' ) ) : the_row(); $t++;
                        $linkedin = get_sub_field( 'linkedin_url' );
                    ?>
                        <div class="card" data-aos="fade-up"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="<?php echo $t; ?>00">
                            <?php $photo = get_sub_field( 'photo' ); ?>
                            <?php if ( $photo ) : ?>
                                <div class="photo">
                                    <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
                                </div>
                            <?php endif; ?>
                            <div class="name">
                                <h4><?php the_sub_field( 'name' ); ?></h4>
                                <?php if ( $linkedin) : ?>
                                    <a href="<?php the_sub_field( 'linkedin_url' ); ?>" target="_blank">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6667 24C22.508 24 24 22.508 24 20.6667V3.33333C24 1.492 22.508 0 20.6667 0H3.33333C1.49267 0 0 1.492 0 3.33333V20.6667C0 22.508 1.49267 24 3.33333 24H20.6667ZM7.33333 8.66667H4V20H7.33333V8.66667ZM5.638 7.33333H5.65667C6.69 7.33333 7.33333 6.59133 7.33333 5.666C7.31467 4.72 6.69 4 5.676 4C4.66333 4 4 4.72 4 5.666C4 6.592 4.64333 7.33333 5.638 7.33333ZM16.6667 20H20L19.9993 13.516C19.9993 10.1667 18.2107 8.66667 15.8253 8.66667C13.9 8.66667 13.1473 9.66667 12.6667 10.4107V8.66667H9.33333V20H12.6667V14C12.6667 13.9444 12.6658 13.8794 12.6649 13.8088C12.6605 13.4658 12.6544 12.9889 12.734 12.7953C12.9967 12.1433 13.538 11.4687 14.5387 11.4687C15.85 11.4687 16.6667 12.4687 16.6667 13.934V20Z" fill="black"/>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <p><?php the_sub_field( 'position' ); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <?php if ( have_rows( 'team_counters' ) ) : $tc = 1; ?>
                    <div class="counters">
                        <div class="row">
                            <?php while ( have_rows( 'team_counters' ) ) : the_row(); $tc++; ?>
                                <div class="item" data-aos="fade-left"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="<?php echo $tc; ?>00">
                                    <div class="count">
                                        <?php the_sub_field( 'count' ); ?>
                                    </div>
                                    <p><?php the_sub_field( 'title' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                            <?php if ( have_rows( 'team_cluth' ) ) : ?>
                                <?php while ( have_rows( 'team_cluth' ) ) : the_row(); ?>
                                    <?php $logo_clutch = get_sub_field( 'logo_clutch' ); ?>
                                    <?php if ( $logo_clutch ) : ?>
                                       <div class="clutch" data-aos="fade-left"
                                            data-aos-easing="ease"
                                            data-aos-duration="1000"
                                            data-aos-delay="<?php echo $tc; ?>00">
                                           <a href="<?php the_sub_field( 'link' ); ?>"><img src="<?php echo esc_url( $logo_clutch['url'] ); ?>" alt="<?php echo esc_attr( $logo_clutch['alt'] ); ?>" /></a>
                                       </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>


        <section id="we_serve">
            <div class="container">
                <div class="row">
                    <div class="head">
                        <h2 data-aos="fade-up"
                            data-aos-easing="ease"
                            data-aos-duration="1000"
                            data-aos-delay="100"><?php the_field( 'section_we_serve' ); ?></h2>
                        <p data-aos="fade-up"
                           data-aos-easing="ease"
                           data-aos-duration="1000"
                           data-aos-delay="200"><?php the_field( 'description_we_serve' ); ?></p>
                        <div class="actions" data-aos="fade-up"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="300">
                            <?php if ( have_rows( 'send_us_an_inquiry' ) ) : ?>
                                <?php while ( have_rows( 'send_us_an_inquiry' ) ) : the_row(); ?>
                                    <div>
                                        <button data-name="request_demo" class="da-modal btn dark"><?php the_sub_field( 'title' ); ?></button>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ( have_rows( 'list_cards_we_serve' ) ) : $ws = 1; ?>
                        <div class="cards">
                            <?php while ( have_rows( 'list_cards_we_serve' ) ) : the_row(); $ws++; ?>
                                <div class="card" data-aos="fade-up"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="<?php echo $ws; ?>00">
                                    <div class="cont">
                                        <?php $icon = get_sub_field( 'icon' ); ?>
                                        <?php if ( $icon ) : ?>
                                            <div class="icon">
                                                <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                            </div>
                                        <?php endif; ?>
                                        <h4><?php the_sub_field( 'title' ); ?></h4>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="our_clients">
            <div class="container">
                <div class="head mb-32">
                    <h2 data-aos="fade-up"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="100"><?php the_field( 'section_title_some_of_our_clients' ); ?></h2>
                </div>
                <?php if ( have_rows( 'cards_some_of_our_clients' ) ) : $cc = 1; ?>
                    <div class="cards">
                        <?php while ( have_rows( 'cards_some_of_our_clients' ) ) : the_row(); $cc++; ?>
                            <div class="card" data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $cc; ?>00">
                                <div class="cont">
                                    <?php $logo = get_sub_field( 'logo' ); ?>
                                    <?php if ( $logo ) : ?>
                                        <div class="logo">
                                            <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <?php the_sub_field( 'description' ); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>


        <section id="testimonials">
            <div class="container">
                <div class="head mb-32">
                    <h2 data-aos="fade-up"
                        data-aos-easing="ease"
                        data-aos-duration="1000"
                        data-aos-delay="100"><?php the_field( 'section_title_testimonials' ); ?></h2>
                </div>
                <?php if ( have_rows( 'testimonials' ) ) : ?>
                <div class="testimonials-slider" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
                            <div class="swiper-slide reviewBlock dark">
                                <div class="quoteIcon">
                                    <svg width="100%" height="100%" viewBox="0 0 53 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.91 0L13.906 30.636L11.698 20.286C14.918 20.286 17.586 21.298 19.702 23.322C21.818 25.346 22.876 28.06 22.876 31.464C22.876 34.868 21.818 37.628 19.702 39.744C17.586 41.768 14.964 42.78 11.836 42.78C8.52402 42.78 5.81002 41.722 3.69402 39.606C1.57802 37.49 0.52002 34.776 0.52002 31.464C0.52002 30.36 0.566019 29.348 0.658019 28.428C0.842019 27.416 1.16402 26.22 1.62402 24.84C2.08402 23.46 2.72802 21.712 3.55602 19.596L10.87 0H21.91ZM51.166 0L43.162 30.636L40.954 20.286C44.174 20.286 46.842 21.298 48.958 23.322C51.074 25.346 52.132 28.06 52.132 31.464C52.132 34.868 51.074 37.628 48.958 39.744C46.842 41.768 44.22 42.78 41.092 42.78C37.78 42.78 35.066 41.722 32.95 39.606C30.834 37.49 29.776 34.776 29.776 31.464C29.776 30.36 29.822 29.348 29.914 28.428C30.098 27.416 30.42 26.22 30.88 24.84C31.34 23.46 31.984 21.712 32.812 19.596L40.126 0H51.166Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    <?php the_sub_field( 'text' ); ?>
                                </div>
                                <?php if ( have_rows( 'author' ) ) : ?>
                                    <div class="author">
                                        <?php while ( have_rows( 'author' ) ) : the_row(); ?>
                                            <?php
                                            $author_photo = get_sub_field( 'photo_review' );
                                            $position = get_sub_field( 'position' );
                                            $linkedin = get_sub_field( 'linekin_url' );
                                            ?>
                                            <?php if ( $author_photo ) : ?>
                                                <div class="photo">
                                                    <img src="<?php echo esc_url( $author_photo['url'] ); ?>" alt="<?php echo esc_attr( $author_photo['alt'] ); ?>" />
                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <h6><?php the_sub_field( 'name' ); ?></h6>
                                                <?php if ( $position ) : ?>
                                                    <p><?php the_sub_field( 'position' ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $linkedin) : ?>
                                                    <a href="<?php the_sub_field( 'linekin_url' ); ?>" target="_blank">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.7">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.6667 28C26.508 28 28 26.508 28 24.6667V7.33333C28 5.492 26.508 4 24.6667 4H7.33333C5.49267 4 4 5.492 4 7.33333V24.6667C4 26.508 5.49267 28 7.33333 28H24.6667ZM11.3333 12.6667H8V24H11.3333V12.6667ZM9.638 11.3333H9.65667C10.69 11.3333 11.3333 10.5913 11.3333 9.666C11.3147 8.72 10.69 8 9.676 8C8.66333 8 8 8.72 8 9.666C8 10.592 8.64333 11.3333 9.638 11.3333ZM20.6667 24H24L23.9993 17.516C23.9993 14.1667 22.2107 12.6667 19.8253 12.6667C17.9 12.6667 17.1473 13.6667 16.6667 14.4107V12.6667H13.3333V24H16.6667V18C16.6667 17.9444 16.6658 17.8794 16.6649 17.8088C16.6605 17.4658 16.6544 16.9889 16.734 16.7953C16.9967 16.1433 17.538 15.4687 18.5387 15.4687C19.85 15.4687 20.6667 16.4687 20.6667 17.934V24Z" fill="currentColor"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
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

        <section id="case_studies">
            <div class="container">
                <div class="head mb-32">
                    <div>
                        <h2 data-aos="fade-up"
                            data-aos-easing="ease"
                            data-aos-duration="1000"
                            data-aos-delay="100">Case studies</h2>
                    </div>
                    <div data-aos="fade-left"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="200" class="more">
                        <a href="/cases" class="read_more">
                            <span>All case studies</span>
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <?php
                $cases_args = array(
                    'post_type' => 'cases',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $cases_query = new WP_Query($cases_args);
                $cases_i = 1;
                ?>

                <div class="cards lightGray">
                    <?php if ($cases_query->have_posts()) :
                        while ($cases_query->have_posts()) : $cases_query->the_post();
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

        <section id="blog" class="blog_section">
            <div class="container">
                <div class="head mb-32">
                    <div>
                        <h2 data-aos="fade-up"
                            data-aos-easing="ease"
                            data-aos-duration="1000"
                            data-aos-delay="100"><?php the_field( 'section_title_blog' ); ?></h2>
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
                                $blog_query->the_post(); ?>
                                <div data-aos="fade-up"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="<?php echo $bc; ?>00" class="swiper-slide articleCard" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">
                                    <div class="title"><?php the_title(); ?></div>
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
                                    <a href="<?php the_permalink() ?>" class="read">
                                        <svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
                                        </svg>
                                    </a>
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
                <?php endif; ?>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_footer();
