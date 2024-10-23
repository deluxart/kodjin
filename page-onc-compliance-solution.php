<?php
/*
* Template Name: Page: ONC compliance solution
*/

get_header();

$section_bg_image = get_field( 'section_bg_image' );

?>
	<main id="home" class="onc_solution">
		<section id="head_slide" style="background-image: url('<?php echo esc_url( $section_bg_image['url'] ); ?>'); background-repeat: no-repeat; background-size: cover">
            <?php if ( have_rows( 'news_ticker_head' ) ) : ?>
                <?php while ( have_rows( 'news_ticker_head' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'enable_news_ticker' ) == 1 ) : ?>
                        <div id="newsTicker" data-name="news-ticker-test">
                            <div class="ticker_desktop-content">
                                <?php the_sub_field( 'ticker_content' ); ?>
                            </div>

                            <div class="ticker_mobile-content" style="display: none;">
                                <?php the_sub_field( 'ticker_content_mobile' ); ?>
                            </div>


                            <div class="close">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.47468 1.06145C2.08416 0.670924 1.451 0.670924 1.06047 1.06145C0.669947 1.45197 0.669947 2.08514 1.06047 2.47566L5.28984 6.70503L1.06047 10.9344C0.669947 11.3249 0.669947 11.9581 1.06047 12.3486C1.451 12.7391 2.08416 12.7391 2.47468 12.3486L6.70406 8.11925L10.933 12.3482C11.3236 12.7387 11.9567 12.7387 12.3472 12.3482C12.7378 11.9577 12.7378 11.3245 12.3472 10.934L8.11827 6.70503L12.3472 2.47606C12.7378 2.08554 12.7378 1.45237 12.3472 1.06185C11.9567 0.671322 11.3236 0.671322 10.933 1.06185L6.70406 5.29082L2.47468 1.06145Z" fill="currentColor"/>
                                </svg>
                            </div>
                        </div>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
			<div class="container">
				<div class="row">
					<div>
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
										<?php if ( have_rows( 'request_demo' ) ) : ?>
											<?php while ( have_rows( 'request_demo' ) ) : the_row(); ?>
												<div>
                                                    <button data-name="request_demo" class="btn white border da-modal"><?php the_sub_field( 'title' ); ?></button>
                                                </div>
											<?php endwhile; ?>
										<?php endif; ?>
                                        <?php if ( have_rows( 'logos' ) ) : ?>
                                        <div class="logos">
                                            <?php while ( have_rows( 'logos' ) ) : the_row(); ?>
                                                <?php $logo = get_sub_field( 'logo' ); ?>
                                                <?php if ( $logo ) : ?>
                                                    <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        </div>
                                        <?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
					</div>
					<div>
						<?php if ( have_rows( 'items' ) ) : $ih = 0; ?>
							<div class="items">
								<?php while ( have_rows( 'items' ) ) : the_row(); $ih++; ?>
									<div class="item" data-aos="fade-up"
										 data-aos-easing="ease"
										 data-aos-duration="1000"
										 data-aos-delay="<?php echo $ih + 3; ?>00">
                                        <div class="num">
                                            <?php echo $ih; ?>
                                        </div>
										<p><?php the_sub_field( 'title' ); ?></p>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
        <?php $note = get_field('heading_foot_note'); ?>
        <?php if ( $note ) : ?>
            <div class="note">
                <h4><?php echo $note; ?></h4>
            </div>
        <?php endif; ?>

        <section id="details">
            <div class="container">
                <?php if ( have_rows( 'details_completion_dates' ) ) : ?>
                <div class="details_block">
                    <?php while ( have_rows( 'details_completion_dates' ) ) : the_row(); ?>
                        <div class="left_side" data-aos="fade-right"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="100">
                            <?php $icon = get_sub_field( 'icon' ); ?>
                            <?php if ( $icon ) : ?>
                                <div class="icon">
                                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                </div>
                            <?php endif; ?>
                            <div>
                                <h3><?php the_sub_field( 'title' ); ?></h3>
                                <?php the_sub_field( 'brief_description' ); ?>
                            </div>
                        </div>
                        <div class="description" data-aos="fade-left"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200">
                            <?php the_sub_field( 'description' ); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <?php if ( have_rows( 'details_reliable_solution' ) ) : ?>
                    <div class="details_block" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <?php while ( have_rows( 'details_reliable_solution' ) ) : the_row(); ?>
                            <div class="left_side">
                                <?php $icon = get_sub_field( 'icon' ); ?>
                                <?php if ( $icon ) : ?>
                                    <div class="icon">
                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div>
                                    <h3><?php the_sub_field( 'title' ); ?></h3>
                                    <?php the_sub_field( 'brief_description' ); ?>
                                </div>
                            </div>
                            <div class="description">
                                <?php the_sub_field( 'description' ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <?php if ( have_rows( 'details_case_study' ) ) : ?>
                <div class="case_study" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <?php while ( have_rows( 'details_case_study' ) ) : the_row(); ?>
                        <div class="details">
                            <div>
                                <div class="tag">Case study</div>
                            </div>
                            <h2><?php the_sub_field( 'title' ); ?></h2>
                            <div class="text">
                                <?php the_sub_field( 'description' ); ?>
                            </div>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) : ?>
                                <a href="<?php echo esc_url( $link) ; ?>" class="read">
                                    <svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                        <?php if ( have_rows( 'review' ) ) : ?>
                        <div class="review">
                            <?php while ( have_rows( 'review' ) ) : the_row(); ?>
                                <div class="icon">
                                    <svg width="53" height="44" viewBox="0 0 53 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.9134 0.601562L13.9094 31.2376L11.7014 20.8876C14.9214 20.8876 17.5894 21.8996 19.7054 23.9236C21.8214 25.9476 22.8794 28.6616 22.8794 32.0656C22.8794 35.4696 21.8214 38.2296 19.7054 40.3456C17.5894 42.3696 14.9674 43.3816 11.8394 43.3816C8.52744 43.3816 5.81344 42.3236 3.69744 40.2076C1.58144 38.0916 0.523438 35.3776 0.523438 32.0656C0.523438 30.9616 0.569437 29.9496 0.661437 29.0296C0.845437 28.0176 1.16744 26.8216 1.62744 25.4416C2.08744 24.0616 2.73144 22.3136 3.55944 20.1976L10.8734 0.601562H21.9134ZM51.1694 0.601562L43.1654 31.2376L40.9574 20.8876C44.1774 20.8876 46.8454 21.8996 48.9614 23.9236C51.0774 25.9476 52.1354 28.6616 52.1354 32.0656C52.1354 35.4696 51.0774 38.2296 48.9614 40.3456C46.8454 42.3696 44.2234 43.3816 41.0954 43.3816C37.7834 43.3816 35.0694 42.3236 32.9534 40.2076C30.8374 38.0916 29.7794 35.3776 29.7794 32.0656C29.7794 30.9616 29.8254 29.9496 29.9174 29.0296C30.1014 28.0176 30.4234 26.8216 30.8834 25.4416C31.3434 24.0616 31.9874 22.3136 32.8154 20.1976L40.1294 0.601562H51.1694Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    <?php the_sub_field( 'review_text' ); ?>
                                </div>
                                <?php if ( have_rows( 'author' ) ) : ?>
                                <div class="author">
                                    <?php while ( have_rows( 'author' ) ) : the_row(); ?>
                                        <div>
                                            <?php $photo = get_sub_field( 'photo' ); ?>
                                            <?php if ( $photo ) : ?>
                                                <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <div class="name"><?php the_sub_field( 'name' ); ?></div>
                                            <div class="position">
                                                <?php the_sub_field( 'position' ); ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <div id="contact_expert" data-aos="fade-up"
             data-aos-easing="ease"
             data-aos-duration="1000"
             data-aos-delay="100">
            <div class="container">
                    <div class="wrap_btn">
                        <a href="#" class="btn dark">Contact Experts</a>
                    </div>
            </div>
        </div>


        <section id="potential_of_fhir">
            <div class="container">
                <?php if ( have_rows( 'potential_of_fhir' ) ) : ?>
                    <?php while ( have_rows( 'potential_of_fhir' ) ) : the_row(); ?>
                        <h2 data-aos="fade-up"
                            data-aos-easing="ease"
                            data-aos-duration="1000"
                            data-aos-delay="100"><?php the_sub_field( 'title' ); ?></h2>
                        <div class="block_description" data-aos="fade-up"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="100">
                            <?php the_sub_field( 'description' ); ?>
                        </div>
                        <?php if ( have_rows( 'main_features' ) ) : ?>
                        <div class="features_block">
                            <?php while ( have_rows( 'main_features' ) ) : the_row(); ?>
                                <div data-aos="fade-right"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="100">
                                    <h3><?php the_sub_field( 'title' ); ?></h3>
                                </div>
                                <div class="features_block_description" data-aos="fade-left"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="100">
                                    <?php the_sub_field( 'description' ); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php if ( have_rows( 'value-adding_capabilities' ) ) : ?>
                        <div class="features_block">
                            <?php while ( have_rows( 'value-adding_capabilities' ) ) : the_row(); ?>
                                <div data-aos="fade-right"
                                     data-aos-easing="ease"
                                     data-aos-duration="1000"
                                     data-aos-delay="100">
                                   <h3><?php the_sub_field( 'title' ); ?></h3>
                                </div>
                                <div>
                                    <?php if ( have_rows( 'list' ) ) : ?>
                                        <?php if ( have_rows( 'list' ) ) : $fl = 1; ?>
                                            <?php while ( have_rows( 'list' ) ) : the_row(); $fl++; ?>
                                                <div data-aos="fade-up"
                                                     data-aos-easing="ease"
                                                     data-aos-duration="1000"
                                                     data-aos-delay="<?php echo $fl; ?>00" class="spoiler">
                                                    <div class="head"><?php the_sub_field( 'title' ); ?><div class="openClose"></div></div>
                                                    <div class="cont"><?php the_sub_field( 'content' ); ?></div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <section id="check_all_features" class="check_all_features" style="cursor: pointer;" onclick="window.location.href = '<?php echo get_home_url(); ?>/whitepapers/the-ultimate-guide-to-fhir/'; return false;">
                    <div class="image">
                        <img data-aos="fade-left"
                             data-aos-easing="ease"
                             data-aos-duration="1000"
                             data-aos-delay="200" src="https://kodjin.com/wp-content/uploads/2024/10/features_block_img_black.png" alt="" />
                    </div>
                    <div class="block" data-aos="fade-up"
                         data-aos-easing="ease"
                         data-aos-duration="1000"
                         data-aos-delay="100">
                        <div>
                            <div class="tag">White paper</div>
                        </div>
                        <h2>Download Kodjin Interoperability Suite</h2>
                        <div class="actions">
                            <a href="<?php echo get_home_url(); ?>/whitepapers/the-ultimate-guide-to-fhir/" class="btn white">Download</a>
                        </div
                    </div>
                </section>
            </div>
            <div class="pattern"></div>
        </section>

        <section id="edenlab_experts">
            <div class="container">
                <div class="head">
                    <h2><?php the_field( 'section_title_edenlabs_experts' ); ?></h2>
                    <p><?php the_field( 'section_description_edenlabs_experts' ); ?></p>
                </div>


                <div class="cards">
                    <?php if ( have_rows( 'section_cards_edenlabs_experts' ) ) : $f_is_card = 1; ?>
                        <?php while ( have_rows( 'section_cards_edenlabs_experts' ) ) : the_row(); $f_is_card++; ?>
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
            </div>
        </section>

        <section id="roadmap">
            <div class="container">
                <div class="wrap_content" data-aos="fade-up"
                     data-aos-easing="ease"
                     data-aos-duration="1000"
                     data-aos-delay="100">
                    <h2><?php the_field( 'section_title_roadmap' ); ?></h2>


<!--                    01-->
                    <?php if ( have_rows( 'section_roadmap_01' ) ) : ?>
                    <div class="block_section">
                    <div class="block_num">01</div>
                        <?php while ( have_rows( 'section_roadmap_01' ) ) : the_row(); ?>
                            <h3><?php the_sub_field( 'title' ); ?></h3>
                            <?php if ( have_rows( 'cards' ) ) : ?>
                            <div class="cards">
                                <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
                                <div class="card">
                                    <div class="tag">
                                    <?php if ( have_rows( 'tag' ) ) : ?>
                                        <?php while ( have_rows( 'tag' ) ) : the_row(); ?>
                                            <?php $icon = get_sub_field( 'icon' ); ?>
                                            <?php if ( $icon ) : ?>
                                                <div class="tag_wrap <?php if ( get_sub_field( 'icon_position' ) == 1 ) : ?>right<?php endif; ?>">
                                                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                                    <span><?php the_sub_field( 'title' ); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div>
                                    <h4><?php the_sub_field( 'card_title' ); ?></h4>
                                    <p><?php the_sub_field( 'description' ); ?></p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                            <div class="description_block">
                                <?php the_sub_field( 'description_block' ); ?>
                            </div>
                            <?php if ( have_rows( 'list' ) ) : $first_list_li = 0; ?>
                            <div class="first_list">
                                <?php while ( have_rows( 'list' ) ) : the_row(); $first_list_li++; ?>
                                <div class="item">
                                    <div class="num">
                                        <?php echo $first_list_li; ?>
                                    </div>
                                    <div class="cont">
                                        <h3><?php the_sub_field( 'title' ); ?></h3>
                                        <p><?php the_sub_field( 'description' ); ?></p>
                                        <?php if ( get_sub_field( 'add_button' ) == 1 ) : ?>
                                        <?php if ( have_rows( 'button' ) ) : ?>
                                            <?php while ( have_rows( 'button' ) ) : the_row(); ?>

                                                <a href="<?php the_sub_field( 'link' ); ?>" class="btn dark border"><?php the_sub_field( 'title' ); ?></a>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>

                    <!--                    01-->

                    <!--                    02-->
                    <?php if ( have_rows( 'section_roadmap_02' ) ) : ?>
                    <div class="block_section">
                        <div class="block_num">02</div>
                        <?php while ( have_rows( 'section_roadmap_02' ) ) : the_row(); ?>
                            <h3><?php the_sub_field( 'title' ); ?></h3>
                            <div class="block_with_image">
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php endif; ?>
                                <div>
                                    <div class="text"><?php the_sub_field( 'description' ); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <!--                    02-->


<!--                    03-->
                    <?php if ( have_rows( 'section_roadmap_03' ) ) : $second_list_li = 0; ?>
                    <div class="block_section">
                        <div class="block_num">03</div>
                        <?php while ( have_rows( 'section_roadmap_03' ) ) : the_row(); ?>
                            <h3><?php the_sub_field( 'title' ); ?></h3>
                        <div class="second_list">
                            <?php if ( have_rows( 'list' ) ) : ?>
                                <?php while ( have_rows( 'list' ) ) : the_row(); $second_list_li++; ?>
                                <div class="item">
                                    <div class="num">
                                        <?php echo $second_list_li; ?>
                                    </div>
                                    <div>
                                        <?php the_sub_field( 'item' ); ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
<!--                    03-->
                </div>
                <?php if ( have_rows( 'actions_roadmap' ) ) : $a_is_card = 1; ?>
                    <div class="cards actions">
                        <?php while ( have_rows( 'actions_roadmap' ) ) : the_row(); $a_is_card++; ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $a_is_card; ?>00" class="card <?php the_sub_field( 'card_color' ); ?>">
                                <div>
                                    <div class="cont">
                                        <h3><?php the_sub_field( 'title' ); ?></h3>
                                        <?php if ( have_rows( 'tags_head' ) ) : ?>
                                            <ul class="tags">
                                                <?php while ( have_rows( 'tags_head' ) ) : the_row(); ?>
                                                    <li><?php the_sub_field( 'title' ); ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if ( have_rows( 'link' ) ) : ?>
                                    <?php while ( have_rows( 'link' ) ) : the_row(); ?>
                                        <a data-name="<?php the_sub_field( 'link' ); ?>" class="da-modal card_link"></a>
                                        <button data-name="<?php the_sub_field( 'link' ); ?>" class="da-modal read <?php the_sub_field( 'icon' ); ?>">
                                            <?php if (get_sub_field( 'icon' ) === 'link') {?>
                                                <svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
                                                </svg>
                                            <?php } else { ?>
                                                <svg width="100%" height="100%" viewBox="0 0 26 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7312 25.4313L12.8749 26.7793L14.0187 25.4313L20.4914 17.8028C21.0274 17.1711 20.9498 16.2245 20.3181 15.6885C19.6864 15.1526 18.7398 15.2301 18.2039 15.8618L14.375 20.3744L14.375 1.68926C14.375 0.860834 13.7034 0.18926 12.875 0.18926C12.0466 0.18926 11.375 0.860834 11.375 1.68926L11.375 20.3746L7.546 15.8618C7.01002 15.2301 6.06345 15.1526 5.43177 15.6885C4.80008 16.2245 4.7225 17.1711 5.25847 17.8028L11.7312 25.4313Z" fill="currentColor"/>
                                                    <path d="M1.99609 29.7163H24.001" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                                                </svg>
                                            <?php } ?>
                                        </button>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
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


        <?php
        $webinars_title = get_field( 'section_title_webinars' );
        echo do_shortcode('[webinars-list posts="6" order="date" title="' . $webinars_title . '"]')
        ?>

	</main>
<?php
get_footer();
