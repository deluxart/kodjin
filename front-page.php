<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodjin
 */

get_header();

$section_bg_image = get_field( 'section_bg_image' );

?>
	<main id="home">
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
						<?php if ( have_rows( 'tags_head' ) ) : $th = 1; ?>
							<ul class="tags">
								<?php while ( have_rows( 'tags_head' ) ) : the_row(); $th++; ?>
									<li data-aos="fade-left"
										data-aos-easing="ease"
										data-aos-duration="1000"
										data-aos-delay="<?php echo $th; ?>00" class="<?php the_sub_field( 'icon_position' ); ?>">
										<?php $icon = get_sub_field( 'icon' ); ?>
										<?php if ( $icon ) : ?>
											<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
										<?php endif; ?>
										<xpan><?php the_sub_field( 'title' ); ?></xpan>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
							<h1
								data-aos="fade-up"
								data-aos-easing="ease"
								data-aos-duration="1000"
								data-aos-delay="100"
							>
								<?php the_field( 'heading_h1' ); ?>
							</h1>
							<p class="description" data-aos="fade-up"
							   data-aos-easing="ease"
							   data-aos-duration="1000"
							   data-aos-delay="200">
								<?php the_field( 'description_head' ); ?>
							</p>
							<div class="actions" data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="300">
								<?php if ( have_rows( 'actions_head' ) ) : ?>
									<?php while ( have_rows( 'actions_head' ) ) : the_row(); ?>
										<?php if ( have_rows( 'download_white_paper' ) ) : ?>
											<?php while ( have_rows( 'download_white_paper' ) ) : the_row(); ?>
												<button data-name="kodjin_white_paper" class="btn white da-modal"><?php the_sub_field( 'title' ); ?></button>
											<?php endwhile; ?>
										<?php endif; ?>
										<?php if ( have_rows( 'request_demo' ) ) : ?>
											<?php while ( have_rows( 'request_demo' ) ) : the_row(); ?>
												<button data-name="request_demo" class="btn white border da-modal"><?php the_sub_field( 'title' ); ?></button>
											<?php endwhile; ?>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
					</div>
					<div>
						<?php if ( have_rows( 'items' ) ) : $ih = 3; ?>
							<div class="items">
								<?php while ( have_rows( 'items' ) ) : the_row(); $ih++; ?>
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
            <?php if ( have_rows( 'partners_head' ) ) : ?>
            <div class="logos mWrap">
                <?php while ( have_rows( 'partners_head' ) ) : the_row(); ?>
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php if ( $logo ) : ?>
                        <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
		</section>

		<section id="interoperability_suite">
			<div class="container">
				<div class="tc mb-32">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_interoperability_suite' ); ?></h2>
				</div>

				<div class="cards">
					<?php if ( have_rows( 'cards_interoperability_suite' ) ) : $is_card = 1; ?>
						<?php while ( have_rows( 'cards_interoperability_suite' ) ) : the_row(); $is_card++; ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $is_card; ?>00" class="card<?php if ( $image ) : ?> with_img<?php endif; ?>">
							<?php if ( $image ) : ?>
								<div class="image">
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								</div>
							<?php endif; ?>
								<div>
									<div class="cont">
										<?php if ( have_rows( 'tags_head' ) ) : ?>
											<ul class="tags">
												<?php while ( have_rows( 'tags_head' ) ) : the_row(); ?>
													<li class="<?php the_sub_field( 'icon_position' ); ?>">
														<?php $icon = get_sub_field( 'icon' ); ?>
														<?php if ( $icon ) : ?>
															<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
														<?php endif; ?>
														<span><?php the_sub_field( 'title' ); ?></span>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<div class="text">
											<?php the_sub_field( 'description' ); ?>
										</div>
									</div>
									<?php if ( have_rows( 'link' ) ) : ?>
										<?php while ( have_rows( 'link' ) ) : the_row(); ?>
											<a href="<?php echo do_shortcode('[site_url]'); ?><?php the_sub_field( 'link' ); ?>" class="read <?php the_sub_field( 'icon' ); ?>">
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
											</a>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<?php if ( have_rows( 'actions_interoperability_suite' ) ) : $a_is_card = 1; ?>
				<div class="cards actions">
					<?php while ( have_rows( 'actions_interoperability_suite' ) ) : the_row(); $a_is_card++; ?>
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

		<section id="free_FHIR_tools">
			<div class="container">
				<div class="tc mb-32">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_free_FHIR_tools' ); ?></h2>
				</div>
				<div class="cards">
					<?php if ( have_rows( 'cards_free_FHIR_tools' ) ) : $free_cards = 1; ?>
						<?php while ( have_rows( 'cards_free_FHIR_tools' ) ) : the_row(); $free_cards++; ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $free_cards; ?>00" class="card<?php if ( $image ) : ?> with_img<?php endif; ?>">
								<?php if ( $image ) : ?>
									<div class="image">
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									</div>
								<?php endif; ?>
								<div>
									<div class="cont">
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<div class="text">
											<?php the_sub_field( 'description' ); ?>
										</div>
										<?php if ( have_rows( 'tags_head' ) ) : ?>
											<ul class="tags light">
												<?php while ( have_rows( 'tags_head' ) ) : the_row(); ?>
													<li>
														<span><?php the_sub_field( 'title' ); ?></span>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>
									<?php if ( have_rows( 'link' ) ) : ?>
										<?php while ( have_rows( 'link' ) ) : the_row(); ?>
											<a href="<?php echo do_shortcode('[site_url]'); ?><?php the_sub_field( 'link' ); ?>" class="read <?php the_sub_field( 'icon' ); ?>">
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
											</a>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section id="partners">
			<div class="container">
				<div class="tc mb-32">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_partners' ); ?></h2>
				</div>

				<?php if ( have_rows( 'logotypes_partners' ) ) : ?>
				<div data-aos="fade-up"
					 data-aos-easing="ease"
					 data-aos-duration="1000"
					 data-aos-delay="200" class="logos">
					<?php while ( have_rows( 'logotypes_partners' ) ) : the_row(); ?>
						<?php $logo = get_sub_field( 'logo' ); ?>
						<?php if ( $logo ) : ?>
							<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>


				<?php if ( have_rows( 'review_partners' ) ) : ?>
				<div class="reviewBlock" data-aos="fade-up"
					 data-aos-easing="ease"
					 data-aos-duration="1000"
					 data-aos-delay="300">
					<?php while ( have_rows( 'review_partners' ) ) : the_row(); ?>
						<div class="quoteIcon">
							<svg width="100%" height="100%" viewBox="0 0 53 43" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.91 0L13.906 30.636L11.698 20.286C14.918 20.286 17.586 21.298 19.702 23.322C21.818 25.346 22.876 28.06 22.876 31.464C22.876 34.868 21.818 37.628 19.702 39.744C17.586 41.768 14.964 42.78 11.836 42.78C8.52402 42.78 5.81002 41.722 3.69402 39.606C1.57802 37.49 0.52002 34.776 0.52002 31.464C0.52002 30.36 0.566019 29.348 0.658019 28.428C0.842019 27.416 1.16402 26.22 1.62402 24.84C2.08402 23.46 2.72802 21.712 3.55602 19.596L10.87 0H21.91ZM51.166 0L43.162 30.636L40.954 20.286C44.174 20.286 46.842 21.298 48.958 23.322C51.074 25.346 52.132 28.06 52.132 31.464C52.132 34.868 51.074 37.628 48.958 39.744C46.842 41.768 44.22 42.78 41.092 42.78C37.78 42.78 35.066 41.722 32.95 39.606C30.834 37.49 29.776 34.776 29.776 31.464C29.776 30.36 29.822 29.348 29.914 28.428C30.098 27.416 30.42 26.22 30.88 24.84C31.34 23.46 31.984 21.712 32.812 19.596L40.126 0H51.166Z" fill="currentColor"/>
							</svg>
						</div>
						<div class="text">
							<?php the_sub_field( 'review_text_partners' ); ?>
						</div>
						<?php if ( have_rows( 'author_review_partners' ) ) : ?>
						<div class="author">
							<?php while ( have_rows( 'author_review_partners' ) ) : the_row(); ?>
								<?php
									$author_photo = get_sub_field( 'author_photo' );
									$company = get_sub_field( 'company' );
									$position = get_sub_field( 'position' );
								?>
								<?php if ( $author_photo ) : ?>
								<div class="photo">
									<img src="<?php echo esc_url( $author_photo['url'] ); ?>" alt="<?php echo esc_attr( $author_photo['alt'] ); ?>" />
								</div>
								<?php endif; ?>
								<div>
									<h6><?php the_sub_field( 'name' ); ?></h6>
									<?php if ( $company ) : ?>
										<p><?php the_sub_field( 'company' ); ?></p>
									<?php endif; ?>
									<?php if ( $position) : ?>
										<p><?php the_sub_field( 'position' ); ?></p>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</section>

		<section id="use_cases">
			<div class="container">
				<div class="row">
					<div class="head">
						<h2 data-aos="fade-up"
							data-aos-easing="ease"
							data-aos-duration="1000"
							data-aos-delay="100"><?php the_field( 'section_title_cases' ); ?></h2>
						<p data-aos="fade-up"
						   data-aos-easing="ease"
						   data-aos-duration="1000"
						   data-aos-delay="200"><?php the_field( 'description_cases' ); ?></p>
						<div class="actions" data-aos="fade-up"
							 data-aos-easing="ease"
							 data-aos-duration="1000"
							 data-aos-delay="300">
							<?php if ( have_rows( 'actions_cases' ) ) : ?>
								<?php while ( have_rows( 'actions_cases' ) ) : the_row(); ?>
									<?php if ( have_rows( 'download_white_paper' ) ) : ?>
										<?php while ( have_rows( 'download_white_paper' ) ) : the_row(); ?>
											<div>
												<button data-name="kodjin_white_paper" class="btn dark da-modal"><?php the_sub_field( 'title' ); ?></button>
												<p><?php the_sub_field( 'description' ); ?></p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php if ( have_rows( 'request_demo' ) ) : ?>
										<?php while ( have_rows( 'request_demo' ) ) : the_row(); ?>
											<div>
												<button data-name="request_demo" class="btn dark border da-modal"><?php the_sub_field( 'title' ); ?></button>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<?php if ( have_rows( 'list_cases' ) ) : $uc_list = 3; ?>
					<div class="list">
						<?php while ( have_rows( 'list_cases' ) ) : the_row(); $uc_list++; ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $uc_list; ?>00" class="spoiler">
								<div class="head"><?php the_sub_field( 'title' ); ?><div class="openClose"></div></div>
								<div class="cont"><?php the_sub_field( 'content' ); ?></div>
							</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="pattern"></div>
		</section>

		<section id="fhir_vendor">
			<div class="container">
				<div class="head" data-aos="fade-right"
					 data-aos-easing="ease"
					 data-aos-duration="1000"
					 data-aos-delay="100">
					<div>
						<h2><?php the_field( 'section_title_fhir_vendor' ); ?></h2>
					</div>
					<div class="text" data-aos="fade-left"
						 data-aos-easing="ease"
						 data-aos-duration="1000"
						 data-aos-delay="200">
						<?php the_field( 'text_content_fhir_vendor' ); ?>
					</div>
				</div>
				<?php if ( have_rows( 'review_fhir_vendor' ) ) : ?>
					<div class="reviewBlock dark" data-aos="fade-up"
						 data-aos-easing="ease"
						 data-aos-duration="1000"
						 data-aos-delay="300">
						<?php while ( have_rows( 'review_fhir_vendor' ) ) : the_row(); ?>
							<div class="quoteIcon">
								<svg width="100%" height="100%" viewBox="0 0 53 43" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.91 0L13.906 30.636L11.698 20.286C14.918 20.286 17.586 21.298 19.702 23.322C21.818 25.346 22.876 28.06 22.876 31.464C22.876 34.868 21.818 37.628 19.702 39.744C17.586 41.768 14.964 42.78 11.836 42.78C8.52402 42.78 5.81002 41.722 3.69402 39.606C1.57802 37.49 0.52002 34.776 0.52002 31.464C0.52002 30.36 0.566019 29.348 0.658019 28.428C0.842019 27.416 1.16402 26.22 1.62402 24.84C2.08402 23.46 2.72802 21.712 3.55602 19.596L10.87 0H21.91ZM51.166 0L43.162 30.636L40.954 20.286C44.174 20.286 46.842 21.298 48.958 23.322C51.074 25.346 52.132 28.06 52.132 31.464C52.132 34.868 51.074 37.628 48.958 39.744C46.842 41.768 44.22 42.78 41.092 42.78C37.78 42.78 35.066 41.722 32.95 39.606C30.834 37.49 29.776 34.776 29.776 31.464C29.776 30.36 29.822 29.348 29.914 28.428C30.098 27.416 30.42 26.22 30.88 24.84C31.34 23.46 31.984 21.712 32.812 19.596L40.126 0H51.166Z" fill="currentColor"/>
								</svg>
							</div>
							<div class="text">
								<?php the_sub_field( 'review_text_fhir_vendor' ); ?>
							</div>
							<?php if ( have_rows( 'author_review_fhir_vendor' ) ) : ?>
								<div class="author">
									<?php while ( have_rows( 'author_review_fhir_vendor' ) ) : the_row(); ?>
										<?php
											$author_photo = get_sub_field( 'author_photo' );
											$company = get_sub_field( 'company' );
											$position = get_sub_field( 'position' );
											$linkedin = get_sub_field( 'linkedin' );
										?>
										<?php if ( $author_photo ) : ?>
											<div class="photo">
												<img src="<?php echo esc_url( $author_photo['url'] ); ?>" alt="<?php echo esc_attr( $author_photo['alt'] ); ?>" />
											</div>
										<?php endif; ?>
										<div>
											<h6><?php the_sub_field( 'name' ); ?></h6>
											<?php if ( $company ) : ?>
												<p><?php the_sub_field( 'company' ); ?></p>
											<?php endif; ?>
											<?php if ( $position) : ?>
												<p><?php the_sub_field( 'position' ); ?></p>
											<?php endif; ?>
											<?php if ( $linkedin) : ?>
												<a href="<?php the_sub_field( 'linkedin' ); ?>" target="_blank">
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
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</section>

		<section id="specific_services">
			<div class="container">
				<div class="tc mb-32">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_specific_services' ); ?></h2>
				</div>
				<div class="cards">
					<?php if ( have_rows( 'big_cards_specific_services' ) ) : $sc = 1; ?>
						<?php while ( have_rows( 'big_cards_specific_services' ) ) : the_row(); $sc++; ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $sc; ?>00" class="card" onclick="window.location.href = '<?php the_sub_field( 'link' ); ?>'; return false;">
								<div>
									<div class="cont">
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<div class="text">
											<?php the_sub_field( 'description' ); ?>
										</div>
									</div>
									<a href="<?php the_sub_field( 'link' ); ?>" class="read">
										<svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
										</svg>
									</a>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="cards small">
					<?php if ( have_rows( 'small_cards_specific_services' ) ) : $scs = 1; ?>
						<?php while ( have_rows( 'small_cards_specific_services' ) ) : the_row(); $scs++; ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $scs;?>00" class="card">
								<div>
									<div class="cont">
										<h4><?php the_sub_field( 'title' ); ?></h4>
									</div>
									<a href="<?php the_sub_field( 'link' ); ?>" class="read">
										<svg width="100%" height="100%" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2544 1.89649L22.3988 0.134546L20.6369 0.278968L8.8555 1.24465C8.02984 1.31233 7.41537 2.03652 7.48305 2.86218C7.55073 3.68784 8.27492 4.3023 9.10058 4.23463L16.8085 3.60283L0.672229 19.7391C0.086442 20.3249 0.0864427 21.2746 0.672229 21.8604C1.25802 22.4462 2.20776 22.4462 2.79355 21.8604L18.9307 5.72326L18.2987 13.4328C18.2311 14.2585 18.8455 14.9826 19.6712 15.0503C20.4969 15.118 21.221 14.5035 21.2887 13.6779L22.2544 1.89649Z" fill="currentColor"/>
										</svg>
									</a>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section id="case_studies">
			<div class="container">
				<div class="head mb-32">
					<div>
						<h2 data-aos="fade-up"
							data-aos-easing="ease"
							data-aos-duration="1000"
							data-aos-delay="100"><?php the_field( 'section_title_case_studies' ); ?></h2>
					</div>
					<div data-aos="fade-left"
						 data-aos-easing="ease"
						 data-aos-duration="1000"
						 data-aos-delay="200" class="more">
						<a href="<?php echo get_home_url(); ?>/cases" class="read_more">
							<span>Read more</span>
							<svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>
							</svg>
						</a>
					</div>
				</div>
                <?php
                $casesArgs = array(
                    'post_type' => 'cases',
                    'posts_per_page' => 3,
                );

                // The Query
                $cases_query = new WP_Query( $casesArgs );

                if ( $cases_query->have_posts() ) { $case_i = 1; ?>
                    <div class="cards lightGray">
                        <?php while ( $cases_query->have_posts() ) : $case_i++; $cases_query->the_post();
                            $cases = get_the_terms( get_the_ID(), 'casecat' );
                            ?>
                            <?php $image = get_field( 'case_image' ); ?>
                            <div data-aos="fade-up"
                                 data-aos-easing="ease"
                                 data-aos-duration="1000"
                                 data-aos-delay="<?php echo $case_i; ?>00" class="card<?php if ( $image ) : ?> with_img<?php endif; ?><?php if ( get_field( 'press_picture' ) == 1 ) : ?> fix_img<?php endif; ?>" onclick="window.location.href = '<?php the_permalink() ?>'; return false;">
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

				<?php if ( have_rows( 'actions_case_studies' ) ) : $a_cs = 1; ?>
					<div class="cards actions">
						<?php while ( have_rows( 'actions_case_studies' ) ) : the_row();

                        $a_cs++;
                        $card_color = get_sub_field( 'card_color' );
                        $card_title = get_sub_field( 'title' );

                        ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $a_cs; ?>00" class="card <?php echo $card_color; ?>">
								<div>
									<div class="cont">
										<h3><?php echo $card_title; ?></h3>
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


		<section id="faq">
			<div class="container">
				<div class="head mb-32">
					<div>
						<h2 data-aos="fade-up"
							data-aos-easing="ease"
							data-aos-duration="1000"
							data-aos-delay="100"><?php the_field( 'section_title_faq' ); ?></h2>
					</div>
<!--					<div data-aos="fade-left"-->
<!--						 data-aos-easing="ease"-->
<!--						 data-aos-duration="1000"-->
<!--						 data-aos-delay="200" class="more">-->
<!--						<a href="#" class="read_more">-->
<!--							<span>All questions and answers</span>-->
<!--							<svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--								<path fill-rule="evenodd" clip-rule="evenodd" d="M23.8844 8.61788L25.2324 7.47411L23.8844 6.33035L16.8435 0.356267C16.2119 -0.179707 15.2653 -0.102119 14.7293 0.529564C14.1933 1.16125 14.2709 2.10782 14.9026 2.64379L18.8282 5.97464L1.89863 5.97464C1.07021 5.97464 0.398634 6.64621 0.398634 7.47464C0.398634 8.30307 1.07021 8.97464 1.89863 8.97464L18.827 8.97464L14.9026 12.3044C14.2709 12.8404 14.1933 13.787 14.7293 14.4187C15.2653 15.0503 16.2118 15.1279 16.8435 14.592L23.8844 8.61788Z" fill="currentColor"/>-->
<!--							</svg>-->
<!--						</a>-->
<!--					</div>-->
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

	</main>
<?php
get_footer();
