<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodjin
 */

/*
* Template Name: Privacy Policy
*/

get_header();
global $wp;
?>


    <section id="profilerInstructions" class="privacy page__spacing">
        <div class="container">
            <div class="content">
                <div class="sidebar">
                    <div class="nav_icon">
                        <div class="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_orange.svg" alt="Kodjin" />
                    </div>
                    <div class="sidebar__card">
                        <ul id="profilerNav">
                            <?php if ( have_rows( 'text_blocks' ) ) :  $ch = 0; ?>
                                <?php while ( have_rows( 'text_blocks' ) ) : the_row();  $ch++; ?>
                                    <?php if ( have_rows( 'title' ) ) : ?>
                                        <?php while ( have_rows( 'title' ) ) : the_row(); ?>
                                            <?php if ( get_sub_field( 'nav_item' ) == 1 ) :
                                                $item_name = get_sub_field( 'heading' );
                                                $vowels = array( " " , "/", "." );
                                                $custom_id = mb_strimwidth(strtolower(str_replace($vowels, "_", $item_name)), 0, 20);
                                                ?>
                                                <li class="<?php if ($ch == 1) { ?>active<?php } ?>"><a href="#<?php echo $custom_id; ?>"><?php the_sub_field( 'heading' ); ?></a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <?php if (have_rows( 'button_start' ) || have_rows( 'button_feedback' )) { ?>
                        <div class="buttons">
                            <p style="font-size: 16px;margin: 0;">By clicking this button, you agree to our <a href="/terms-of-use" style="font-size: 16px;">Terms of Service</a></p>

                            <?php if ( have_rows( 'button_start' ) ) : ?>
                            <?php while ( have_rows( 'button_start' ) ) : the_row(); ?>
                                <?php if ( get_sub_field( 'enable_button' ) == 1 ) : ?>
                                    <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" class="btn orange"><?php the_sub_field( 'title' ); ?></a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'button_feedback' ) ) : ?>
                            <?php while ( have_rows( 'button_feedback' ) ) : the_row(); ?>
                                <?php if ( get_sub_field( 'enable_button' ) == 1 ) : ?>
                                    <a href="<?php the_sub_field( 'link' ); ?>" data-name="feedbackModal" class="btn orange border da-modal"><?php the_sub_field( 'title' ); ?></a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="blocks">
                    <?php the_title( '<h1 class="heading">', '</h1>' ); ?>
                    <?php if ( have_rows( 'text_blocks' ) ) : ?>
                        <?php while ( have_rows( 'text_blocks' ) ) : the_row(); ?>
                        <div class="block">
                            <div class="text">
                            <?php if ( have_rows( 'title' ) ) : ?>
                                <?php while ( have_rows( 'title' ) ) : the_row();
                                    $item_name = get_sub_field( 'heading' );
                                    $vowels = array( " " , "/", "." );
                                    $custom_id = mb_strimwidth(strtolower(str_replace($vowels, "_", $item_name)), 0, 20);
                                ?>
                                    <h4 class="heading" id="<?php echo $custom_id; ?>"><?php the_sub_field( 'heading' ); ?></h4>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php the_sub_field( 'content' ); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'button_start' ) ) : ?>
                        <?php while ( have_rows( 'button_start' ) ) : the_row(); ?>
                        <br/>
                            <p style="font-size: 16px;margin: 0 0 14px;">By clicking this button, you agree to our <a href="/terms-of-use" style="font-size: 16px;">Terms of Service</a></p>

                            <?php if ( get_sub_field( 'enable_button' ) == 1 ) : ?>
                                <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" class="btn orange"><?php the_sub_field( 'title' ); ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>


<div class="active-sidebar"></div>

    <script>
        let lastId,
            topMenu = jQuery("#profilerNav"),
            topMenuHeight = topMenu.outerHeight(),
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                let item;
                const temp = jQuery(this).attr("href");
                console.log('temp', temp);
                const ID = temp.split('#').pop();
                console.log('ID', ID);
                if (!ID) {
                    console.log('ID undefined');
                    item = jQuery('body');
                } else {
                    item = jQuery('#' + ID);
                }

                console.log('item', item);
                if (item.length) {
                    return item;
                }
            });

        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e){
            const href = jQuery(this).attr("href"),
                offsetTop = href === "#" ? 0 : jQuery(href).offset().top - 160;
            jQuery('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();
        });

        // Bind to scroll
        jQuery(window).scroll(function(){
            // Get container scroll position
            var fromTop = jQuery(this).scrollTop() + 220;

            // Get id of current scroll item
            var cur = scrollItems.map(function(){
                if (jQuery(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href='#"+id+"']").parent().addClass("active");
            }
        });
    </script>
<?php
get_footer();
