<?php
/*
* Template Name: Page: Terminology service
*/

get_header();

$section_bg_image = get_field( 'section_bg_image' );

?>
	<main id="solution_page">
		<section id="head_slide" class="solution" style="background-image: url('<?php echo esc_url( $section_bg_image['url'] ); ?>'); background-repeat: no-repeat; background-size: cover">
			<div class="container">
				<div class="row">
					<div class="head_text">
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
			</div>
		</section>

		<?php if ( get_field( 'video_iframe_head' ) ) : ?>
		<section id="video_block">
			<div class="container">
				<div class="youTube" data-aos="fade-up"
					 data-aos-easing="ease"
					 data-aos-duration="1000"
					 data-aos-delay="100">
					<?php the_field( 'video_iframe_head' ); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<section class="fhir_server">
			<div class="container">
				<div class="head mb-32 tc">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_kodjin_fhir_server' ); ?></h2>
					<p data-aos="fade-up"
					   data-aos-easing="ease"
					   data-aos-duration="1000"
					   data-aos-delay="200"><?php the_field( 'section_description_kodjin_fhir_server' ); ?></p>
				</div>
				<div class="cards">
					<?php if ( have_rows( 'cards_kodjin_fhir_server' ) ) : $f_is_card = 1; ?>
						<?php while ( have_rows( 'cards_kodjin_fhir_server' ) ) : the_row(); $f_is_card++; ?>
							<?php $image = get_sub_field( 'image' ); ?>
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
				<?php if ( have_rows( 'actions_kodjin_fhir_server' ) ) : $a_is_card = 1; ?>
					<div class="cards actions">
						<?php while ( have_rows( 'actions_kodjin_fhir_server' ) ) : the_row(); $a_is_card++; ?>
							<?php $card_title = get_sub_field( 'title' ); ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $a_is_card; ?>00" class="card <?php the_sub_field( 'card_color' ); ?>">
								<div>
									<div class="cont <?php if ( have_rows( 'list_content' ) ) : ?>list_content<?php endif; ?>">
										<?php if ( have_rows( 'list_content' ) ) : ?>
											<h5><?php echo $card_title ?></h5>
										<?php else : ?>
											<h3><?php echo $card_title ?></h3>
										<?php endif; ?>
										<?php if ( have_rows( 'list_content' ) ) : ?>
											<ul class="list_content">
												<?php while ( have_rows( 'list_content' ) ) : the_row(); ?>
													<li>
														<a href="<?php the_sub_field( 'link' ); ?>">
															<?php $icon = get_sub_field( 'icon' ); ?>
															<?php if ( $icon ) : ?>
																<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
															<?php endif; ?>
															<?php the_sub_field( 'title' ); ?>
														</a>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
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
										<?php if (get_sub_field( 'link' )) { ?>
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
										<?php } ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</section>

		<section id="service_operations">
			<div class="container">
				<div class="head mb-32 tc">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_service_operations' ); ?></h2>
				</div>
				<div class="cards">
					<?php if ( have_rows( 'cards_service_operations' ) ) : $co_is_card = 1; ?>
						<?php while ( have_rows( 'cards_service_operations' ) ) : the_row(); $co_is_card++; ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $co_is_card; ?>00" class="card gray">
								<div>
									<div class="cont">
										<?php $icon = get_sub_field( 'icon_operations' ); ?>
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


		<section id="check_all_features" class="check_all_features">
			<div class="container">
				<div class="block" data-aos="fade-up"
					 data-aos-easing="ease"
					 data-aos-duration="1000"
					 data-aos-delay="100">
					<h3><?php the_field( 'block_title_check_all_features' ); ?></h3>
					<?php the_field( 'block_description_all_features' ); ?>
					<div class="actions">
						<?php if ( have_rows( 'actions_all_features' ) ) : ?>
							<?php while ( have_rows( 'actions_all_features' ) ) : the_row(); ?>
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
						<h2><?php the_field( 'section_title_the_history_behind' ); ?></h2>
					</div>
					<div class="text" data-aos="fade-left"
						 data-aos-easing="ease"
						 data-aos-duration="1000"
						 data-aos-delay="200">
						<?php the_field( 'text_content_the_history_behind' ); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="explore_more">
			<div class="container">
				<div class="head tc mb-32">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_explore_more' ); ?></h2>
					<p data-aos="fade-up"
					   data-aos-easing="ease"
					   data-aos-duration="1000"
					   data-aos-delay="200"><?php the_field( 'section_description_explore_more' ); ?></p>
				</div>
				<div class="cards">
					<?php if ( have_rows( 'cards_explore_more' ) ) : $em_card = 1; ?>
						<?php while ( have_rows( 'cards_explore_more' ) ) : the_row(); $em_card++; ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $em_card; ?>00" class="card" style="cursor: pointer;" onclick="window.location.href = '<?php the_sub_field( 'link' ); ?>'; return false;">
								<div>
									<div class="cont">
										<?php if ( have_rows( 'tags' ) ) : $th = 1; ?>
											<ul class="tags">
												<?php while ( have_rows( 'tags' ) ) : the_row(); $th++; ?>
													<li data-aos="fade-left"
														data-aos-easing="ease"
														data-aos-duration="1000"
														data-aos-delay="<?php echo $th; ?>00" class="<?php the_sub_field( 'icon_position' ); ?>">
														<?php $icon = get_sub_field( 'icon_more' ); ?>
														<?php if ( $icon ) : ?>
															<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
														<?php endif; ?>
														<xpan><?php the_sub_field( 'title' ); ?></xpan>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<div class="text">
											<?php the_sub_field( 'description' ); ?>
										</div>
									</div>
									<a href="<?php echo do_shortcode('[site_url]'); ?><?php the_sub_field( 'link' ); ?>" class="read link">
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

		<section id="why_choose">
			<div class="container">
				<div class="head">
					<h2 data-aos="fade-up"
						data-aos-easing="ease"
						data-aos-duration="1000"
						data-aos-delay="100"><?php the_field( 'section_title_why_choose_kodjin' ); ?></h2>
				</div>
				<?php if ( have_rows( 'cards_why_choose_kodjin' ) ) : $why_item = 1; ?>
					<div class="items">
						<?php while ( have_rows( 'cards_why_choose_kodjin' ) ) : the_row(); $why_item++; ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $why_item; ?>00" class="item">
								<?php $icon = get_sub_field( 'icon' ); ?>
								<?php if ( $icon ) : ?>
									<div class="icon">
										<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
									</div>
								<?php endif; ?>
								<h3><?php the_sub_field( 'title' ); ?></h3>
								<?php the_sub_field( 'description' ); ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php if ( have_rows( 'actions_why_choose_kodjin' ) ) : $why_context_card = 1; ?>
					<div class="cards actions">
						<?php while ( have_rows( 'actions_why_choose_kodjin' ) ) : the_row(); $why_context_card++; ?>
							<?php $card_title = get_sub_field( 'title' ); ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $why_context_card; ?>00" class="card <?php the_sub_field( 'card_color' ); ?>">
								<div>
									<div class="cont <?php if ( have_rows( 'list_content' ) ) : ?>list_content<?php endif; ?>">
										<?php if ( have_rows( 'list_content' ) ) : ?>
											<h5><?php echo $card_title ?></h5>
										<?php else : ?>
											<h3><?php echo $card_title ?></h3>
										<?php endif; ?>
										<?php if ( have_rows( 'list_content' ) ) : ?>
											<ul class="list_content">
												<?php while ( have_rows( 'list_content' ) ) : the_row(); ?>
													<li>
														<a href="<?php the_sub_field( 'link' ); ?>">
															<?php $icon = get_sub_field( 'icon' ); ?>
															<?php if ( $icon ) : ?>
																<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
															<?php endif; ?>
															<?php the_sub_field( 'title' ); ?>
														</a>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
										<?php if ( have_rows( 'tags_head' ) ) : ?>
											<ul class="tags">
												<?php while ( have_rows( 'tags_head' ) ) : the_row(); ?>
													<li><?php the_sub_field( 'title' ); ?></li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>
								<?php if ( have_rows( 'list_content' ) ) : ?>

								<?php else : ?>
								<?php if ( have_rows( 'link' ) ) : ?>
									<?php while ( have_rows( 'link' ) ) : the_row(); ?>
										<?php if (get_sub_field( 'link' )) {?>
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
										<?php } ?>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="pattern"></div>
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
						<?php while ( have_rows( 'actions_case_studies' ) ) : the_row(); $a_cs++; ?>
							<div data-aos="fade-up"
								 data-aos-easing="ease"
								 data-aos-duration="1000"
								 data-aos-delay="<?php echo $a_cs; ?>00" class="card <?php the_sub_field( 'card_color' ); ?>">
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
