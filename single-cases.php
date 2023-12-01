<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kodjin
 */

get_header();

$cases = get_the_terms( get_the_ID(), 'casecat' );
$attach_whitepaper = get_field('attach_whitepaper');
?>

	<main id="case" class="case-single">

		<section id="head" class="<?php if ( get_field( 'press_picture' ) == 1 ) : ?>fix_img<?php endif; ?>">
            <div class="container">
                <div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <div>
                        <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                    </div>
                </div>
                <div class="row">
                    <?php $case_image = get_field( 'case_image' ); ?>
                    <?php if ( $case_image ) : ?>
                    <div class="image">
                        <img src="<?php echo esc_url( $case_image['url'] ); ?>" alt="<?php echo esc_attr( $case_image['alt'] ); ?>" />
                    </div>
                    <?php endif; ?>

                    <div class="info">
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
                        <h1><?php the_field( 'head_title' ); ?></h1>
                        <div class="text">
                            <?php the_field( 'head_description' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="content_block<?php if ( $attach_whitepaper ) : ?> whitepaper<?php endif; ?>">
                <div class="sections">

                    <?php if (get_field( 'description_client_background' )) { ?>
                    <section id="client_background" class="text_section">
                        <?php if (get_field( 'section_title_client_background' )) { ?>
                            <h2><?php the_field( 'section_title_client_background' ); ?></h2>
                        <?php } ?>
                        <div class="text">
                            <?php the_field( 'description_client_background' ); ?>
                        </div>
                    </section>
                    <?php } ?>

                    <?php if (get_field( 'section_description_about' )) { ?>
                        <section id="about" class="text_section">
                            <?php if (get_field( 'section_title_about' )) { ?>
                                <h2><?php the_field( 'section_title_about' ); ?></h2>
                            <?php } ?>
                            <div class="text">
                                <?php the_field( 'section_description_about' ); ?>
                            </div>
                        </section>
                    <?php } ?>

                    <?php if (get_field( 'description_solution_highlights' )) { ?>
                        <section id="solution_highlights" class="text_section solution_highlights">
                            <?php if (get_field( 'section_title_solution_highlights' )) { ?>
                                <h2><?php the_field( 'section_title_solution_highlights' ); ?></h2>
                            <?php } ?>
                            <div class="text">
                                <?php the_field( 'description_solution_highlights' ); ?>
                            </div>
                        </section>
                    <?php } ?>

                    <?php if ( have_rows( 'list_items_challenges' ) ) : ?>
                        <section id="challenges" class="text_section challenges">
                            <?php if (get_field( 'section_title_challenges' )) { ?>
                                <h2><?php the_field( 'section_title_challenges' ); ?></h2>
                            <?php } ?>
                            <div class="blocks">
                            <?php while ( have_rows( 'list_items_challenges' ) ) : the_row(); ?>
                                <div class="block">
                                    <div class="text">
                                        <?php the_sub_field( 'description' ); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <?php if ( have_rows( 'list_items_our_solution' ) ) : ?>
                        <section id="our_solution" class="text_section our_solution">
                            <?php if (get_field( 'section_title_our_solution' )) { ?>
                                <h2><?php the_field( 'section_title_our_solution' ); ?></h2>
                            <?php } ?>
                            <div class="blocks">
                                <?php while ( have_rows( 'list_items_our_solution' ) ) : the_row(); ?>
                                    <div class="block text">
                                        <?php the_sub_field( 'content' ); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <?php if (get_field( 'block_title_calling' )) { ?>
                    <section class="check_all_features">
                        <div class="block">
                            <h2><?php the_field( 'block_title_calling' ); ?></h2>
                            <?php the_field( 'description_calling' ); ?>
                            <?php if ( have_rows( 'button_calling' ) ) : ?>
                                <?php while ( have_rows( 'button_calling' ) ) : the_row(); ?>
                                    <div>
                                        <a href="<?php the_sub_field( 'link' ); ?>" class="btn white"><?php the_sub_field( 'title' ); ?></a>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </section>
                    <?php } ?>

                    <?php if (get_field( 'description_results' )) { ?>
                        <section id="results" class="text_section results">
                            <?php if (get_field( 'section_title_results' )) { ?>
                                <h2><?php the_field( 'section_title_results' ); ?></h2>
                            <?php } ?>
                            <div class="text">
                                <?php the_field( 'description_results' ); ?>
                            </div>
                        </section>
                    <?php } ?>

                    <?php if (get_field( 'description_future_development' )) { ?>
                        <section id="future_development" class="text_section future_development">
                            <?php if (get_field( 'section_title_future_development' )) { ?>
                                <h2><?php the_field( 'section_title_future_development' ); ?></h2>
                            <?php } ?>
                            <div class="text">
                                <?php the_field( 'description_future_development' ); ?>
                            </div>
                        </section>
                    <?php } ?>


                    <?php if ( have_rows( 'list_items_technology_stack' ) ) : ?>
                        <section id="technology_stack" class="text_section technology_stack">
                            <?php if (get_field( 'section_title_technology_stack' )) { ?>
                                <h2><?php the_field( 'section_title_technology_stack' ); ?></h2>
                            <?php } ?>
                            <div class="list">
                            <?php while ( have_rows( 'list_items_technology_stack' ) ) : the_row(); ?>
                                <div class="item">
                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) : ?>
                                        <div class="icon">
                                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <?php if (get_sub_field( 'title' )) { ?>
                                        <h4><?php the_sub_field( 'title' ); ?></h4>
                                    <?php } ?>
                                    <?php if (get_sub_field( 'description' )) { ?>
                                        <?php the_sub_field( 'description' ); ?>
                                    <?php } ?>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                </div>
                <div>
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
                    <?php endif; ?>
                </div>
            </div>

            <?php if (get_field( 'section_title_testimonials' )) { ?>
            <section id="testimonial" class="text_section testimonial">
                <h2 class="mb-32"><?php the_field( 'section_title_testimonials' ); ?></h2>
                <?php while ( have_rows( 'testimonial_item' ) ) : the_row(); ?>
                    <div class="reviewBlock dark">
                        <div class="quoteIcon">
                            <svg width="100%" height="100%" viewBox="0 0 53 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.91 0L13.906 30.636L11.698 20.286C14.918 20.286 17.586 21.298 19.702 23.322C21.818 25.346 22.876 28.06 22.876 31.464C22.876 34.868 21.818 37.628 19.702 39.744C17.586 41.768 14.964 42.78 11.836 42.78C8.52402 42.78 5.81002 41.722 3.69402 39.606C1.57802 37.49 0.52002 34.776 0.52002 31.464C0.52002 30.36 0.566019 29.348 0.658019 28.428C0.842019 27.416 1.16402 26.22 1.62402 24.84C2.08402 23.46 2.72802 21.712 3.55602 19.596L10.87 0H21.91ZM51.166 0L43.162 30.636L40.954 20.286C44.174 20.286 46.842 21.298 48.958 23.322C51.074 25.346 52.132 28.06 52.132 31.464C52.132 34.868 51.074 37.628 48.958 39.744C46.842 41.768 44.22 42.78 41.092 42.78C37.78 42.78 35.066 41.722 32.95 39.606C30.834 37.49 29.776 34.776 29.776 31.464C29.776 30.36 29.822 29.348 29.914 28.428C30.098 27.416 30.42 26.22 30.88 24.84C31.34 23.46 31.984 21.712 32.812 19.596L40.126 0H51.166Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="text">
                            <?php the_sub_field( 'text' ); ?>
                        </div>
                        <?php if ( have_rows( 'author_testimonial' ) ) : ?>
                            <div class="author">
                                <?php while ( have_rows( 'author_testimonial' ) ) : the_row(); ?>
                                    <?php
                                    $author_photo = get_sub_field( 'photo' );
                                    $position = get_sub_field( 'position' );
                                    $linkedin = get_sub_field( 'linkedin_url' );
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
                    </div>
                <?php endwhile; ?>
            </section>
            <?php } ?>

            <?php if (get_field( 'block_title_calling_second' )) { ?>
                <section class="check_all_features second">
                    <div class="block">
                        <h2><?php the_field( 'block_title_calling_second' ); ?></h2>
                        <?php the_field( 'description_calling_second' ); ?>
                        <?php if ( have_rows( 'button_calling_second' ) ) : ?>
                            <?php while ( have_rows( 'button_calling_second' ) ) : the_row(); ?>
                                <div>
                                    <a href="<?php the_sub_field( 'link' ); ?>" class="btn white"><?php the_sub_field( 'title' ); ?></a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </section>
            <?php } ?>

        </div>

        <?php echo do_shortcode('[cases-list posts="6" order="date" title="More cases"]') ?>

	</main><!-- #main -->

<?php
get_footer();
