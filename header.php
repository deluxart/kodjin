<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kodjin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<base href="<?php echo get_home_url(); ?>/" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script id="vtag-ai-js" async src="https://r2.leadsy.ai/tag.js" data-pid="b4FiYY2WgoHiajQC" data-version="062024"></script>
	<?php wp_head(); ?>
    <?php if ( have_rows( 'head_scripts', 'option' ) ) : ?>
        <?php while ( have_rows( 'head_scripts', 'option' ) ) : the_row(); ?>
            <?php the_sub_field( 'code_head' ); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if ( is_page_template('page-test-forms.php') ) { ?>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <?php } ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( have_rows( 'body_scripts', 'option' ) ) : ?>
	<?php while ( have_rows( 'body_scripts', 'option' ) ) : the_row(); ?>
		<?php the_sub_field( 'code_body' ); ?>
	<?php endwhile; ?>
<?php endif; ?>

<div id="page" class="site<?php if ( is_admin_bar_showing() ) { ?> is_admin<?php } ?>">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kodjin' ); ?></a>

	<header id="header" class="<?php if ( get_field( 'transparent_header_on_top' ) == 1 ) : ?>transparent_on_top<?php endif; ?><?php if ( is_admin_bar_showing() ) { ?> is_admin<?php } ?>">
		<div class="container">
			<div class="row">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138.23 45.55">
                            <path fill="#ff8129" d="M9.11,44.3C3,41.87-.15,38.69,0,32.31c.15-8.79,10.16-13.8,12.59-22,.91-3.19,1.36-7-.3-10.32,3.64,2.28,8.34,9.1,5.91,16.84-2.27,7.28-11.07,10.62-12,18.36-.46,4.7,2.88,9.11,2.88,9.11Z"/>
                            <path fill="#ff8129" d="M29.91,28.83a11.88,11.88,0,0,1-2.58,6.82c-1.06,1.22-3.49,3.64-5.46,2.13-1.21-.76-.91-2.43-.15-3.49,1.21-1.67,3.49-3,4.4-5.31,1.52-3.64,1.21-6.68-.76-10.62,0-.16-.15-.31-.15-.46a39.07,39.07,0,0,0-2.43-4.25c1.36,10.62-10.32,14.26-12.59,20.48C9,37.47,9.28,41,11.7,43.24a8.84,8.84,0,0,0,7,2.27A13.5,13.5,0,0,0,30.37,31.86a12.41,12.41,0,0,0-.46-3Z"/>
                            <path fill="currentColor" d="M51.12,33.91a2.52,2.52,0,0,1-2.56,2.67,2.18,2.18,0,0,1-2-1l0,.9h-1v-6.9h1V32.1l-.17.44a2.27,2.27,0,0,1,2.14-1.31,2.51,2.51,0,0,1,2.55,2.67Zm-1,0a1.77,1.77,0,1,0-1.76,1.76A1.67,1.67,0,0,0,50.1,33.91Zm3,3.92.66-1.42-.25-.52-2.06-4.51h1.08l1.73,3.89h0L56,31.38h1.08l-2.92,6.45Zm7.8-5.16V30.56h4.6c0-.26,0-.5,0-.74s0-.21-.21-.21q-2.64,0-5.28,0c-.17,0-.21.05-.21.21,0,2.16,0,4.31,0,6.47v.19h5.68c0-.25,0-.49,0-.72s0-.22-.21-.22h-4.4v-2h4.4v-.87Zm34.06-.34c.15-.17.28-.35.44-.51a2.49,2.49,0,0,1,4,1.24A2.86,2.86,0,0,1,99,35.67a2.42,2.42,0,0,1-2.47.93,2,2,0,0,1-1.42-.89.11.11,0,0,1,0-.08l-.07,0c0,.22,0,.45,0,.67s0,.16-.17.16H94V29.72c0-.16,0-.22.2-.21h.68c.11,0,.15,0,.15.15V32a1.13,1.13,0,0,1-.06.31Zm1.81,3.39A1.79,1.79,0,1,0,95,33.94,1.68,1.68,0,0,0,96.73,35.72Zm-26-3.43c0-.18,0-.38,0-.58,0-.67,0-1.32,0-2v-.2h1v7h-1v-.85l-.09.08a2.29,2.29,0,0,1-2.36.89,2.58,2.58,0,0,1-2.08-2.91,2.51,2.51,0,0,1,1.4-2.21,2.48,2.48,0,0,1,2.88.47C70.53,32.08,70.62,32.19,70.69,32.29Zm-1.78,3.43a1.78,1.78,0,1,0-1.76-1.78,1.68,1.68,0,0,0,1.76,1.78Zm22.71-2.18a7.65,7.65,0,0,0,0-.83.73.73,0,0,0-.68-.61,3.54,3.54,0,0,0-1.45,0,.71.71,0,0,0-.6.62H88a1.21,1.21,0,0,1,.68-1.23A3.25,3.25,0,0,1,90,31.24a4.61,4.61,0,0,1,1.69.19,1.35,1.35,0,0,1,1,1.36v3.56s0,.08,0,.14h-.8s-.09-.08-.1-.13l-.09-.61h0a2.76,2.76,0,0,1-2.12.89,2.44,2.44,0,0,1-1-.18A1.44,1.44,0,0,1,87.65,35a1.33,1.33,0,0,1,1.27-1.44c.57-.05,1.13,0,1.7-.05Zm0,.72H89.55a1.65,1.65,0,0,0-.3,0,.66.66,0,0,0-.55.62c0,.41.12.71.46.81a2.84,2.84,0,0,0,.82.1,2,2,0,0,0,1.4-.61,1.09,1.09,0,0,0,.25-1Zm-13.5.07H73.75a1.72,1.72,0,0,0,.37.92,1.65,1.65,0,0,0,1.18.57,2.39,2.39,0,0,0,1-.12,1.36,1.36,0,0,0,.6-.49.2.2,0,0,1,.14-.1h.89a1.18,1.18,0,0,1-.07.2,2.15,2.15,0,0,1-1.52,1.22,3.18,3.18,0,0,1-2-.09,2.41,2.41,0,0,1-1.58-2.11,2.9,2.9,0,0,1,.19-1.54,2.41,2.41,0,0,1,1.9-1.5,3.12,3.12,0,0,1,1.63.1,2.35,2.35,0,0,1,1.62,2C78.11,33.71,78.11,34,78.13,34.33Zm-1-.76A1.52,1.52,0,0,0,76,32.11a2.07,2.07,0,0,0-1.28,0,1.49,1.49,0,0,0-1,1.42Zm2.05-2.18v5.12h.79a.21.21,0,0,0,.23-.23c0-.91,0-1.8,0-2.7a1.34,1.34,0,0,1,1-1.32,2,2,0,0,1,1-.06,1.2,1.2,0,0,1,1,.94,3.33,3.33,0,0,1,.07.7c0,.82,0,1.63,0,2.45v.19h1a1,1,0,0,0,0-.16V33.61a4,4,0,0,0-.06-.69,1.86,1.86,0,0,0-1-1.45,2.34,2.34,0,0,0-1.1-.23,2.15,2.15,0,0,0-2,.95l0,.06,0,0v-.83Zm7.48-1.87h-1v7h1Z"/>
                            <path fill="currentColor" d="M46.05,24.2a.46.46,0,0,1-.37-.14.5.5,0,0,1-.12-.35V9.83a.55.55,0,0,1,.12-.37.5.5,0,0,1,.37-.14h1.06a.48.48,0,0,1,.51.51V15.1L53.3,9.66a1.65,1.65,0,0,1,.28-.21,1.09,1.09,0,0,1,.55-.13h1.14a.43.43,0,0,1,.3.13.38.38,0,0,1,.13.3.4.4,0,0,1-.09.27l-6.56,6.43,7,7a.48.48,0,0,1,.11.3.45.45,0,0,1-.13.3.42.42,0,0,1-.3.13H54.53a.93.93,0,0,1-.55-.14,2,2,0,0,1-.28-.23l-6.08-6v5.85a.45.45,0,0,1-.14.35.5.5,0,0,1-.37.14H46.05Z"/>
                            <path fill="currentColor" d="M67.18,24.42a7.1,7.1,0,0,1-3.13-.63,4.44,4.44,0,0,1-2-1.93,7.67,7.67,0,0,1-.78-3.29c0-.62,0-1.22,0-1.8s0-1.17,0-1.79a7.29,7.29,0,0,1,.82-3.27,4.63,4.63,0,0,1,2-2,7.43,7.43,0,0,1,6.08,0,4.76,4.76,0,0,1,2.05,2A7,7,0,0,1,73.07,15c0,.62,0,1.22,0,1.79s0,1.18,0,1.8a7.39,7.39,0,0,1-.78,3.29,4.51,4.51,0,0,1-2,1.93A7,7,0,0,1,67.18,24.42Zm0-1.81a3.68,3.68,0,0,0,2.64-1,4.46,4.46,0,0,0,1.12-3.17c0-.63,0-1.2,0-1.71s0-1.06,0-1.69a5.36,5.36,0,0,0-.54-2.38,3.24,3.24,0,0,0-1.33-1.34,4.11,4.11,0,0,0-1.89-.42,4.18,4.18,0,0,0-1.9.42A3.16,3.16,0,0,0,64,12.68a5.35,5.35,0,0,0-.57,2.38c0,.63,0,1.19,0,1.69s0,1.08,0,1.71a4.46,4.46,0,0,0,1.13,3.17,3.75,3.75,0,0,0,2.66,1Z"/>
                            <path fill="currentColor" d="M81,24.2a.45.45,0,0,1-.36-.14.5.5,0,0,1-.13-.35V9.83a.55.55,0,0,1,.13-.37A.47.47,0,0,1,81,9.32h4.83a8.05,8.05,0,0,1,3.53.66,4.13,4.13,0,0,1,2,1.94,7.47,7.47,0,0,1,.64,3.16c0,.64,0,1.2,0,1.68s0,1,0,1.66a8,8,0,0,1-.65,3.24,3.86,3.86,0,0,1-1.91,1.91,8,8,0,0,1-3.46.63Zm1.6-1.8h3.23A5.61,5.61,0,0,0,88.12,22a2.48,2.48,0,0,0,1.26-1.29,6.35,6.35,0,0,0,.42-2.36c0-.43,0-.8,0-1.12v-1c0-.32,0-.68,0-1.09a4.46,4.46,0,0,0-1-3.05,4.19,4.19,0,0,0-3.15-1H82.55V22.4Z"/>
                            <path fill="currentColor" d="M103.79,24.42a7.65,7.65,0,0,1-2.06-.28,5.28,5.28,0,0,1-1.72-.83,4.17,4.17,0,0,1-1.2-1.4,4.61,4.61,0,0,1-.49-2,.46.46,0,0,1,.47-.47h1.15a.51.51,0,0,1,.37.14.69.69,0,0,1,.18.35,2.76,2.76,0,0,0,.55,1.54,2.71,2.71,0,0,0,1.19.86,4.34,4.34,0,0,0,1.6.28,3,3,0,0,0,2.46-1.06,4.4,4.4,0,0,0,.85-2.83V11.17H99.6a.48.48,0,0,1-.49-.49V9.81a.45.45,0,0,1,.14-.35.48.48,0,0,1,.35-.14h9.16a.48.48,0,0,1,.51.51v8.93a6.44,6.44,0,0,1-.66,3,4.66,4.66,0,0,1-1.87,2,5.88,5.88,0,0,1-2.95.69Z"/>
                            <path fill="currentColor" d="M117.58,24.2a.44.44,0,0,1-.36-.14.5.5,0,0,1-.13-.35V9.81a.52.52,0,0,1,.13-.35.46.46,0,0,1,.36-.14h1.13a.49.49,0,0,1,.36.14.48.48,0,0,1,.13.35v13.9a.46.46,0,0,1-.13.35.43.43,0,0,1-.36.14Z"/>
                            <path fill="currentColor" d="M127.64,24.2a.43.43,0,0,1-.36-.14.46.46,0,0,1-.13-.35V9.83a.51.51,0,0,1,.13-.37.46.46,0,0,1,.36-.14h1a.54.54,0,0,1,.38.12.66.66,0,0,1,.15.18l7,10.84V9.83a.54.54,0,0,1,.13-.37.49.49,0,0,1,.36-.14h1a.48.48,0,0,1,.38.14.5.5,0,0,1,.14.37V23.69a.52.52,0,0,1-.14.36.47.47,0,0,1-.35.15h-1a.45.45,0,0,1-.36-.13l-.16-.17-7-10.73V23.71a.48.48,0,0,1-.14.35.51.51,0,0,1-.37.14Z"/>
                        </svg>
					</a>
				</div>

				<button id="hamburger" aria-label="hamburger" aria-haspopup="true" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</button>

				<nav class="menu">
					<ul class="menu-bar">
						<li>
							<button class="nav-link dropdown-btn" data-dropdown="dropdown1" aria-haspopup="true" aria-expanded="false" aria-label="solutions">
								Solutions
								<i aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 512 512">
										<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" fill="currentColor"/>
									</svg>
								</i>
							</button>
							<div id="dropdown1" class="dropdown">
								<ul role="menu">
									<li class="dropdown-title">
										<span class="dropdown-link-title">Kodjin Interoperability Suite:</span>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/kodjin-fhir-server/">
											Kodjin FHIR Server
										</a>
                                        <ul class="submenu">
<!--                                            <li><a href="https://demo.kodjin.com/" target="_blank">Free Demo Server</a></li>-->
                                            <li><a href="<?php echo get_home_url(); ?>/whitepapers/kodjin-performance-testing/">Performance</a></li>
                                        </ul>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/terminology-service/">
											Kodjin FHIR Terminology Service
										</a>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/mapper/">
                                            Kodjin Data Mapper
										</a>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/fhir-facade/">FHIR Facade</a>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/healthcare-elt-extensive-solution/">Kodjin ETL Solution</a>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/onc-compliance-solution/">Kodjin ONC Compliance Solution</a>
									</li>
									<li class="dropdown-title">
										<span class="dropdown-link-title">Free tools</span>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/fhir-profiler/">
											Kodjin FHIR Profiler
										</a>
									</li>
								</ul>

								<button class="download_wp da-modal" data-name="kodjin_white_paper">
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="20" cy="20" r="20" fill="white"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M18.7712 25.338L19.9149 26.686L21.0587 25.338L25.5226 20.077C26.0586 19.4453 25.981 18.4987 25.3493 17.9627C24.7177 17.4268 23.7711 17.5044 23.2351 18.136L21.416 20.28L21.416 8.66161C21.416 7.83318 20.7444 7.16161 19.916 7.16161C19.0876 7.16161 18.416 7.83318 18.416 8.66161L18.416 20.2825L16.5948 18.136C16.0588 17.5044 15.1122 17.4268 14.4806 17.9627C13.8489 18.4987 13.7713 19.4453 14.3073 20.077L18.7712 25.338Z" fill="black"/>
										<path d="M12.4102 27.9932H27.5859" stroke="black" stroke-width="3" stroke-linecap="round"/>
									</svg>
									<span class="title">
											Download  Interoperability Suite
										</span>
									<span>
											<span class="tag">
												White Paper
											</span>
										</span>
								</button>
							</div>
						</li>
                        <li><a class="nav-link" href="<?php echo get_home_url(); ?>/service/custom-fhir-development-services/">Services</a></li>
<!--						<li>-->
<!--							<button class="nav-link dropdown-btn" data-dropdown="dropdown2" aria-haspopup="true" aria-expanded="false" aria-label="services">-->
<!--								Services-->
<!--								<i aria-hidden="true">-->
<!--									<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 512 512">-->
<!--										<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" fill="currentColor"/>-->
<!--									</svg>-->
<!--								</i>-->
<!--							</button>-->
<!--							<div id="dropdown2" class="dropdown">-->
<!--								<ul role="menu">-->
<!--									<li role="menuitem">-->
<!--										<a class="dropdown-link big" href="service/custom-fhir-development-services/">Custom Services Development</a>-->
<!--									</li>-->
<!--									<li role="menuitem">-->
<!--										<a class="dropdown-link" href="#">FHIR Consulting</a>-->
<!--									</li>-->
<!--									<li role="menuitem">-->
<!--										<a class="dropdown-link" href="#">FHIR Compliance</a>-->
<!--									</li>-->
<!--									<li role="menuitem">-->
<!--										<a class="dropdown-link" href="#">Courses and trainings</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</div>-->
<!--						</li>-->
						<li><a class="nav-link" href="<?php echo get_home_url(); ?>/about/">About us</a></li>
						<li>
							<button class="nav-link dropdown-btn" data-dropdown="dropdown3" aria-haspopup="true" aria-expanded="false" aria-label="resources">
								Resources
								<i aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 512 512">
										<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" fill="currentColor"/>
									</svg>
								</i>
							</button>
							<div id="dropdown3" class="dropdown">
								<ul role="menu">
									<li role="menuitem">
										<a class="dropdown-link big" href="<?php echo get_home_url(); ?>/resources/">
                                            <span>Resources</span>
                                            <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.28906 13L7.28906 7L1.28906 1" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </a>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/cases/">Case Studies</a>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/webinars/">Webinars</a>
									</li>
									<li role="menuitem">
										<a class="dropdown-link" href="<?php echo get_home_url(); ?>/white-papers/">White Papers</a>
									</li>
                                    <li role="menuitem">
                                        <a class="dropdown-link" href="<?php echo get_home_url(); ?>/news-events/">News and Events</a>
                                    </li>
                                    <li role="menuitem">
                                        <a class="dropdown-link" href="https://docs.kodjin.com/" target="_blank">Documentation</a>
                                    </li>
								</ul>
                                <div class="side">
                                    <a href="<?php echo get_home_url(); ?>/blog/"><span class="insights">Insights</span></a>
                                    <ul class="tags">
                                        <li><a href="<?php echo get_home_url(); ?>/blog/category/featured/">Featured</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/blog/category/fhir/">FHIR</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/blog/category/fhir-server/">FHIR Server</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/blog/category/kodjin-updates/">Kodjin Updates</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/blog/category/healthcare/">Healthcare</a></li>
                                    </ul>
<!--                                    <span class="dropdown-link-title">Kodjin Documentation</span>-->
<!--                                    <a href="https://docs.kodjin.com/" class="git" target="_blank">-->
<!--                                        <span>Docs on Github</span>-->
<!--                                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4242 1.49324L10.4723 0.905927L9.88502 0.954067L4.13303 1.42554C3.85781 1.4481 3.65299 1.6895 3.67555 1.96472C3.69811 2.23994 3.9395 2.44476 4.21472 2.4222L8.60958 2.06197L0.283962 10.3876C0.0886994 10.5828 0.0886999 10.8994 0.283962 11.0947C0.479224 11.29 0.795806 11.29 0.991069 11.0947L9.31622 2.76954L8.95606 7.16354C8.9335 7.43876 9.13832 7.68015 9.41354 7.70271C9.68876 7.72527 9.93016 7.52045 9.95272 7.24523L10.4242 1.49324Z" fill="black"/>-->
<!--                                        </svg>-->
<!--                                    </a>-->
                                </div>
							</div>
						</li>
					</ul>
				</nav>
                <div id="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 2a8 8 0 015.3 13.7l5.4 5.4-1.4 1.4-5.4-5.4A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z"/>
                    </svg>
                </div>
				<a data-name="request_demo" class="da-modal btn white">Contact Us</a>
			</div>
		</div>
	</header><!-- #masthead -->
