<?php
/*
* Template Name: Page: Joint Project
*/

get_header();
?>

    <main id="primary" class="join-page">

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
                <h1 data-aos="fade-up"
                    data-aos-easing="ease"
                    data-aos-duration="1000"
                    data-aos-delay="200"><?php the_title(); ?></h1>
            </div>
            <div class="single-post type-post">
                <div class="post_wrap">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>


                    <div class="sidebar">

                        <div class="card whitepaper">
                            <div class="image">
                                <img width="150" height="150" src="https://kodjin.com/wp-content/uploads/2023/08/stanislav_ostrovskiy.png" class="attachment-thumbnail size-thumbnail" alt="">
                            </div>
                            <div>
                                <h4>Let’s talk in-person at DMEA 2024!</h4>
                                <a href="#wp_form" class="btn dark">Schedule a meeting</a>
                            </div>
                        </div>

                    </div>




                </div>
            </div>
            <div class="contactForm white_paper" id="wp_form" data-aos="fade-up"
                 data-aos-easing="ease"
                 data-aos-duration="1000"
                 data-aos-delay="100">
                <div class="form">
                    <h2>Schedule a meeting at DMEA, 9-11 April</h2>
                    <div class="kodjin_contact_from" data-name="kodjin_join_form">
                        <?php echo do_shortcode('[contact-form-7 id="5060" title="Kodjin Join Form"]') ?>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();
