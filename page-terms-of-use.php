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
* Template Name: Page: Terms of use
*/

get_header();
global $wp;
?>


    <section id="profilerInstructions" class="privacy page__spacing compliance">
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
                    </div>
                </div>
                <div class="blocks">
                    <?php the_title( '<h1 class="heading">', '</h1>' ); ?>
                    <?php if ( have_rows( 'text_blocks' ) ) : ?>
                        <?php while ( have_rows( 'text_blocks' ) ) : the_row(); ?>
                            <div class="block">
                                <?php
                                    $content_type = get_sub_field( 'content_style' );
                                ?>

                                <?php if ($content_type !== 'spoiler') { ?>
                                    <?php if ( have_rows( 'title' ) ) : ?>
                                        <?php while ( have_rows( 'title' ) ) : the_row();
                                            $item_name = get_sub_field( 'heading' );
                                            $vowels = array( " " , "/", "." );
                                            $custom_id = mb_strimwidth(strtolower(str_replace($vowels, "_", $item_name)), 0, 20);
                                            ?>
                                            <h3 class="heading" id="<?php echo $custom_id; ?>"><?php the_sub_field( 'heading' ); ?></h3>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php } ?>

                                <?php if ($content_type === 'cards') { ?>

                                    <div class="cards">
                                        <?php if ( have_rows( 'profiler_cards' ) ) : $f_is_card = 1; ?>
                                            <?php while ( have_rows( 'profiler_cards' ) ) : the_row(); $f_is_card++; ?>
                                                <div data-aos-delay="<?php echo $f_is_card; ?>00" class="card">
                                                    <div>
                                                        <div class="cont">
                                                            <?php $icon = get_sub_field( 'profiler_card_icon' ); ?>
                                                            <?php $title = get_sub_field( 'card_title' ); ?>
                                                            <?php $description = get_sub_field( 'card_decription' ); ?>
                                                            <?php if ( $icon ) : ?>
                                                                <div class="icon">
                                                                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if ( $title ) : ?>
                                                                <h4><?php the_sub_field( 'card_title' ); ?></h4>
                                                            <?php endif; ?>
                                                            <?php if ( $description ) : ?>
                                                                <div class="text">
                                                                    <?php the_sub_field( 'card_decription' ); ?>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>


                                <?php } elseif ($content_type === 'styledList') { ?>
                                    <ul class="styledList">
                                    <?php if ( have_rows( 'stylized_numbered_list' ) ) : ?>
                                        <?php while ( have_rows( 'stylized_numbered_list' ) ) : the_row(); ?>
                                            <li>
                                                <div class="num"></div>
                                                <div class="cont"><?php the_sub_field( 'text_numbered_list' ); ?></div>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </ul>
                                <?php } elseif ($content_type === 'spoiler') { ?>
                                    <div class="spoiler">
                                        <div class="head">
                                            <?php if ( have_rows( 'title' ) ) : ?>
                                                <?php while ( have_rows( 'title' ) ) : the_row();
                                                    $item_name = get_sub_field( 'heading' );
                                                    $vowels = array( " " , "/", "." );
                                                    $custom_id = mb_strimwidth(strtolower(str_replace($vowels, "_", $item_name)), 0, 20);
                                                    ?>
                                                    <h4 id="<?php echo $custom_id; ?>"><?php the_sub_field( 'heading' ); ?></h4>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                            <div class="openClose"></div></div>
                                        <div class="cont"><?php the_sub_field( 'spoiler_text' ); ?></div>
                                    </div>
                                <?php } else { ?>
                                    <div class="text">
                                        <?php the_sub_field( 'content' ); ?>
                                    </div>
                                <?php } ?>
                            </div>
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
