<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kodjin
 */

?>
	<footer id="footer">
		<div class="container">
			<div id="contact_us" data-aos="fade-up"
				 data-aos-easing="ease"
				 data-aos-duration="1000"
				 data-aos-delay="100">
				<div class="contactForm">
                    <?php if (is_page( 'feedback' ) ) : ?>
					<div class="wrapForm">
						<div class="head">
							<h1>Leave your feedback</h1>
							<p>Feel free to give us feedback about Kodjin solutions.</p>
						</div>
                        <div class="form kodjin_contact_from contact_us" data-name="contact_us">
                            <?php echo do_shortcode('[contact-form-7 id="4127" title="Contact form_contact_us"]'); ?>
                        </div>
					</div>

                    <?php elseif (is_page('Test HS Form')) : ?>
                        <!-- Код для страницы 'page-test-forms' -->
                        <div class="wrapForm">
                            <div class="head">
                                <h1>Special test Form</h1>
                                <p>This is a special form for the 'page-test-forms' page.</p>
                            </div>
                            <div class="form kodjin_contact_from special_form" data-name="special_form">
                                <?php echo do_shortcode('[contact-form-7 id="b21ec70" title="Contact form_test"]'); ?>
                            </div>
                        </div>
                    <?php elseif (is_page('Contact us')) : ?>
                        <div class="wrapForm">
                            <div class="head">
                                <h1 class="heading">Let`s chat</h1>
                                <p>We would be glad to share more details about our enterprise-level FHIR software solutions and other cases based on the HL7 FHIR standard.</p>
                            </div>
                            <div class="form kodjin_contact_from" data-name="contact_footer">
                                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
                            </div>
                        </div>
                    <?php else : ?>
                    <div class="wrapForm">
                        <div class="head">
                            <h2>Let`s chat</h2>
                            <p>We would be glad to share more details about our enterprise-level FHIR software solutions and other cases based on the HL7 FHIR standard.</p>
                        </div>
                        <div class="form kodjin_contact_from" data-name="contact_footer">
                            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
                        </div>
                    </div>
                    <?php endif; ?>
					<div class="successForm">
						<div class="wrap">
							<h2>Your form has been submitted successfully</h2>
							<p>We will contact your shortly</p>
							<button class="btn dark again">Send again</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="leftSide">
					<div class="logo">
						<a href="<?php echo get_home_url(); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138.23 45.55">
                                <path fill="currentColor" d="M9.11,44.3C3,41.87-.15,38.69,0,32.31c.15-8.79,10.16-13.8,12.59-22,.91-3.19,1.36-7-.3-10.32,3.64,2.28,8.34,9.1,5.91,16.84-2.27,7.28-11.07,10.62-12,18.36-.46,4.7,2.88,9.11,2.88,9.11Z"/>
                                <path fill="currentColor" d="M29.91,28.83a11.88,11.88,0,0,1-2.58,6.82c-1.06,1.22-3.49,3.64-5.46,2.13-1.21-.76-.91-2.43-.15-3.49,1.21-1.67,3.49-3,4.4-5.31,1.52-3.64,1.21-6.68-.76-10.62,0-.16-.15-.31-.15-.46a39.07,39.07,0,0,0-2.43-4.25c1.36,10.62-10.32,14.26-12.59,20.48C9,37.47,9.28,41,11.7,43.24a8.84,8.84,0,0,0,7,2.27A13.5,13.5,0,0,0,30.37,31.86a12.41,12.41,0,0,0-.46-3Z"/>
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
					<div class="socials">
						<h5>Follow us</h5>
						<ul>
							<li>
								<a href="https://www.facebook.com/edenlabIT" target="_blank">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4.04201 4.04348C6.41747 1.66802 9.63929 0.333496 12.9987 0.333496C16.3581 0.333496 19.5799 1.66802 21.9554 4.04348C24.3308 6.41894 25.6654 9.64076 25.6654 13.0002C25.6654 16.3596 24.3308 19.5814 21.9554 21.9569C19.5846 24.3277 16.3707 25.6616 13.0183 25.6668C13.5944 25.6656 14.1568 25.6126 14.7121 25.5375V16.3575H17.9901L18.5048 13.0275H14.7114V11.2075C14.7114 9.82418 15.1634 8.59751 16.4574 8.59751H18.5367V5.69151L18.5171 5.68886C18.1441 5.63842 17.3731 5.53418 15.9388 5.53418C12.8901 5.53418 11.1028 7.14418 11.1028 10.8122V13.0275H7.96875V16.3575H11.1028V25.5102C11.7134 25.602 12.3318 25.6648 12.9663 25.6668C9.61856 25.6582 6.40983 24.3247 4.04201 21.9569C1.66655 19.5814 0.332031 16.3596 0.332031 13.0002C0.332031 9.64076 1.66655 6.41894 4.04201 4.04348Z" fill="currentColor"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/edenlab-it" target="_blank">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M20.6667 24C22.508 24 24 22.508 24 20.6667V3.33333C24 1.492 22.508 0 20.6667 0H3.33333C1.49267 0 0 1.492 0 3.33333V20.6667C0 22.508 1.49267 24 3.33333 24H20.6667ZM7.33333 8.66667H4V20H7.33333V8.66667ZM5.638 7.33333H5.65667C6.69 7.33333 7.33333 6.59133 7.33333 5.666C7.31467 4.72 6.69 4 5.676 4C4.66333 4 4 4.72 4 5.666C4 6.592 4.64333 7.33333 5.638 7.33333ZM16.6667 20H20L19.9993 13.516C19.9993 10.1667 18.2107 8.66667 15.8253 8.66667C13.9 8.66667 13.1473 9.66667 12.6667 10.4107V8.66667H9.33333V20H12.6667V14C12.6667 13.9444 12.6658 13.8794 12.6649 13.8088C12.6605 13.4658 12.6544 12.9889 12.734 12.7953C12.9967 12.1433 13.538 11.4687 14.5387 11.4687C15.85 11.4687 16.6667 12.4687 16.6667 13.934V20Z" fill="currentColor"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/EdenlabIT" target="_blank">
<!--									<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--										<path d="M24.9981 2.286C24.1161 2.67667 23.1674 2.93733 22.1668 3.06067C23.1841 2.45667 23.9668 1.49333 24.3341 0.355333C23.3821 0.913334 22.3274 1.32333 21.2054 1.53933C20.3094 0.589333 19.0314 0 17.6154 0C14.8954 0 12.6908 2.18533 12.6908 4.88C12.6908 5.26133 12.7354 5.63267 12.8194 5.99333C8.72743 5.788 5.09809 3.84267 2.67009 0.890667C2.24343 1.612 2.00343 2.45667 2.00343 3.348C2.00343 5.042 2.87076 6.53333 4.19343 7.412C3.38609 7.38733 2.62609 7.16267 1.96076 6.80267C1.96076 6.81734 1.96076 6.83934 1.96076 6.86C1.96076 9.22734 3.65876 11.1987 5.90943 11.6473C5.49809 11.76 5.06343 11.8227 4.61543 11.8227C4.29743 11.8227 3.98743 11.7867 3.68743 11.7327C4.31409 13.6673 6.13209 15.0813 8.28609 15.1233C6.60076 16.43 4.47809 17.2127 2.17009 17.2127C1.77143 17.2127 1.38143 17.19 0.996094 17.1433C3.17676 18.524 5.76609 19.3333 8.54543 19.3333C17.6021 19.3333 22.5568 11.896 22.5568 5.444C22.5568 5.23267 22.5501 5.022 22.5401 4.814C23.5068 4.13133 24.3401 3.27 24.9981 2.286Z" fill="currentColor"/>-->
<!--									</svg>-->
                                    <svg width="25" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300.1 271">
                                                <path d="M237.1,0h46l-101,115,118,156H207.5L135,176.2,52,271H6L113,148,0,0H94.9l65.5,86.6ZM221,244h25.5L81.5,26H54.1Z" fill="currentColor" />
                                    </svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="widgets">
					<?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-1'); ?>
					<?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-2'); ?>
					<?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-3'); ?>
					<?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-4'); ?>
				</div>
			</div>
			<div class="copyright">
				Kodjin Interoperability Suite made by <a href="https://edenlab.io/" target="_blank">Edenlab</a> is a custom software and product development company with a primary focus on healthcare data interoperability.
                <p style="margin-top: 20px;font-size: 14px;max-width: 300px;">Address:
                    Vesivärava str. 50-201, 10152, Tallinn, Estonia</p>
			</div>
            <ul class="terms-links">
                <li><a href="<?php echo do_shortcode('[site_url]'); ?>/privacy-policy/">Privacy Policy</a></li>
                <li><a href="<?php echo do_shortcode('[site_url]'); ?>/terms-of-use">Terms of service</a></li>
                <li><a href="<?php echo do_shortcode('[site_url]'); ?>/web-accessibility-statement/">Web Accessibility Statement</a></li>
            </ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="request_demo" class="daModal da-modal-popup">
	<div class="da-modal-inner">
		<div class="da-modal-content">
			<div class="contactForm request_demo">
				<div class="wrapForm">
					<div class="head">
						<h2>Let`s chat</h2>
						<p>We would be glad to share more details about our enterprise-level FHIR software solutions and other cases based on the HL7 FHIR standard.</p>
					</div>
					<div class="form kodjin_contact_from" data-name="contact_popup">
						<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
					</div>
				</div>
				<div class="successForm">
					<div class="wrap">
						<h2>Your form has been submitted successfully</h2>
						<p>We will contact your shortly</p>
						<button class="btn dark again">Send again</button>
					</div>
				</div>
			</div>
		</div>
		<button class="da-modal-close close-clear-form">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M2.56066 0.43934C1.97487 -0.146447 1.02513 -0.146447 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L7.87667 9.99799L0.43934 17.4353C-0.146447 18.0211 -0.146447 18.9708 0.43934 19.5566C1.02513 20.1424 1.97487 20.1424 2.56066 19.5566L9.99799 12.1193L17.4347 19.556C18.0205 20.1418 18.9702 20.1418 19.556 19.556C20.1418 18.9702 20.1418 18.0205 19.556 17.4347L12.1193 9.99799L19.556 2.56128C20.1418 1.97549 20.1418 1.02574 19.556 0.439956C18.9702 -0.145831 18.0205 -0.145832 17.4347 0.439956L9.99799 7.87667L2.56066 0.43934Z" fill="black"/>
			</svg>
		</button>
	</div>
</div>

<!--Kodjin White Paper Modal-->
<div id="kodjin_white_paper" class="daModal da-modal-popup">
	<div class="da-modal-inner">
		<div class="da-modal-content">
			<?php if (is_page( 'what-is-fhir' ) ) : ?>
				<div class="contactForm white_paper">
				<div class="wrapForm">
					<div class="image">
						<img src="/wp-content/uploads/2024/11/image2.png" style="max-width: 400px;" alt="The Ultimate Guide to FHIR" />
					</div>
					<div>
						<div class="head">
							<h2>The Ultimate Guide <br/>to FHIR</h2>
							<p>The Only Guide You Will Need</p>
						</div>
                        <div class="form kodjin_contact_from" data-name="<?php if ( is_page_template('page-what-is-fhir.php') ) { ?>wp_guide<?php } else { ?>ultimate_guide_to_FHIR<?php } ?>" data-file="https://kodjin.com/wp-content/uploads/2024/07/ultimate-guide-to-fhir-11-24.pdf" data-file-name="The Ultimate Guide to FHIR">
							<?php echo do_shortcode('[contact-form-7 id="198" title="Kodjin White Paper"]') ?>
						</div>
					</div>
				</div>
				<div class="successForm">
					<div class="wrap">
						<h2>The Ultimate Guide to FHIR has been successfully sent to your email</h2>
						<p>We have sent a copy to your email</p>
						<a class="da-modal-close btn dark again">Back to website content</a>
					</div>
				</div>
			</div>
			<?php else : ?>
				<div class="contactForm white_paper">
				<div class="wrapForm">
					<div class="image">
                        <?php $default_wp_wallpaper = get_field( 'default_wp_wallpaper', 'option' ); ?>
                        <?php if ( $default_wp_wallpaper ) : ?>
                            <img src="<?php echo esc_url( $default_wp_wallpaper['url'] ); ?>" style="max-width: 380px;" alt="<?php echo esc_attr( $default_wp_wallpaper['alt'] ); ?>" />
                        <?php else : ?>
						<img src="/wp-content/uploads/2023/07/kodjin_white_paper.jpg" alt="Kodjin White Paper" />
                        <?php endif; ?>
					</div>
					<div>
						<div class="head">
							<h2><?php the_field( 'wp_modal_title', 'option' ); ?></h2>
							<p><?php the_field( 'wp_modal_description', 'option' ); ?></p>
						</div>
                        <div class="form kodjin_contact_from" data-name="wp_suite" data-file="<?php if ( get_field( 'default_wp_file', 'option' ) ) : ?><?php the_field( 'default_wp_file', 'option' ); ?><?php endif; ?>" data-file-name="<?php if ( get_field( 'default_wp_name', 'option' ) ) : ?><?php the_field( 'default_wp_name', 'option' ); ?><?php endif; ?>">
							<?php echo do_shortcode('[contact-form-7 id="198" title="Kodjin White Paper"]') ?>
						</div>
					</div>
				</div>
				<div class="successForm">
					<div class="wrap">
						<h2>The Kodjin White Paper has been successfully sent to your email</h2>
						<p>We have sent a copy to your email</p>
						<a class="da-modal-close btn dark again">Back to website content</a>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<button class="da-modal-close close-clear-form">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M2.56066 0.43934C1.97487 -0.146447 1.02513 -0.146447 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L7.87667 9.99799L0.43934 17.4353C-0.146447 18.0211 -0.146447 18.9708 0.43934 19.5566C1.02513 20.1424 1.97487 20.1424 2.56066 19.5566L9.99799 12.1193L17.4347 19.556C18.0205 20.1418 18.9702 20.1418 19.556 19.556C20.1418 18.9702 20.1418 18.0205 19.556 17.4347L12.1193 9.99799L19.556 2.56128C20.1418 1.97549 20.1418 1.02574 19.556 0.439956C18.9702 -0.145831 18.0205 -0.145832 17.4347 0.439956L9.99799 7.87667L2.56066 0.43934Z" fill="black"/>
			</svg>
		</button>
	</div>
</div>
<!--Kodjin White Paper Modal-->

<div class="da-modal-open-bg"></div>

<div id="full-screen-search">
    <div class="search-container">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        <div id="close-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

<script>
    setTimeout(function () {
        const iframeGTM = document.createElement('iframe');
        iframeGTM.src = 'https://www.googletagmanager.com/ns.html?id=GTM-P3T8QXX';
        iframeGTM.style.display = 'none';
        iframeGTM.style.visibility = 'hidden';
        iframeGTM.height = '0';
        iframeGTM.width = '0';

        document.body.appendChild(iframeGTM);
    }, 5000);
</script>


</body>
</html>
