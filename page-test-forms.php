<?php
/*
* Template Name: Page: Test forms
*/

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">
            <script>
                hbspt.forms.create({
                    region: "na1",
                    portalId: "3433176",
                    formId: "f716b1ee-3a58-423d-87a7-2502e2702715"
                });
            </script>
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;
			?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
