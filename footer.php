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
                            <svg width="164" height="62" viewBox="0 0 164 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M47.1343 35.6777C46.4961 30.5877 44.3454 25.9411 44.3454 25.9411C14.6638 27.8716 27.212 0 27.212 0C27.212 0 19.852 1.56849 13.3365 10.256C6.82106 18.9432 12.3713 35.1111 12.3713 35.1111C4.89056 31.0089 4.4078 20.2704 4.4078 20.2704C0.253668 30.515 -0.493102 37.9302 0.876342 43.2228C3.05418 53.9366 12.5273 62 23.884 62C36.8511 62 47.3633 51.4881 47.3633 38.5207C47.3633 37.3472 47.285 36.4111 47.1343 35.6777Z" fill="#FFFFFF"/>
                                <path d="M40.0854 21C40.0854 21 43.7138 9.16832 30.1604 7.27947C30.1604 7.27947 25.358 19.9065 40.0854 21Z" fill="#FFFFFF"/>
                                <path d="M64.9217 31.0141C64.8307 30.9156 64.7852 30.7904 64.7852 30.6385V15.7748C64.7852 15.608 64.8307 15.4753 64.9217 15.3764C65.0128 15.2779 65.1341 15.2285 65.286 15.2285H66.3559C66.5224 15.2285 66.6554 15.2779 66.754 15.3764C66.8528 15.4753 66.9019 15.608 66.9019 15.7748V21.4425L73.0707 15.5927C73.3133 15.3501 73.6089 15.2285 73.9585 15.2285H75.0964C75.2177 15.2285 75.324 15.274 75.4151 15.3651C75.5061 15.4561 75.5519 15.5624 75.5519 15.6838C75.5519 15.8054 75.5136 15.9039 75.4378 15.9797L68.336 22.8538L75.9159 30.3881C75.9917 30.4792 76.0297 30.5855 76.0297 30.7068C76.0297 30.8284 75.9842 30.9345 75.8931 31.0255C75.8021 31.1166 75.6957 31.1621 75.5747 31.1621H74.3907C74.178 31.1621 74.0112 31.128 73.8902 31.0597C73.7683 30.9914 73.6398 30.9042 73.5032 30.7979L66.9019 24.3563V30.6385C66.9019 30.7904 66.8486 30.9156 66.7429 31.0141C66.6363 31.113 66.5072 31.1621 66.3559 31.1621H65.286C65.1341 31.1621 65.0128 31.113 64.9217 31.0141Z" fill="currentColor"/>
                                <path d="M90.711 28.3955C91.4395 27.6598 91.8337 26.533 91.8947 25.0153C91.925 24.1048 91.9403 23.4979 91.9403 23.1945C91.9403 22.8608 91.925 22.2534 91.8947 21.3734C91.8337 19.8563 91.4395 18.7256 90.711 17.9818C89.9826 17.2387 89.0112 16.8664 87.7975 16.8664C86.5833 16.8664 85.6086 17.2387 84.8724 17.9818C84.1361 18.7256 83.7458 19.8563 83.7003 21.3734C83.6847 21.8139 83.6775 22.4205 83.6775 23.1945C83.6775 23.9535 83.6847 24.5601 83.7003 25.0153C83.7458 26.533 84.1328 27.6598 84.861 28.3955C85.5894 29.1317 86.5683 29.4995 87.7975 29.4995C89.0112 29.4995 89.9826 29.1317 90.711 28.3955ZM83.2222 29.8296C82.1446 28.7903 81.5755 27.2232 81.5152 25.1292C81.4997 24.6739 81.4922 24.029 81.4922 23.1945C81.4922 22.36 81.4997 21.7226 81.5152 21.2823C81.5755 19.2189 82.1637 17.6556 83.2792 16.5932C84.3946 15.5314 85.9003 15 87.7975 15C89.6941 15 91.1966 15.5314 92.3042 16.5932C93.4119 17.6556 93.9962 19.2189 94.057 21.2823C94.0873 22.1626 94.1026 22.8 94.1026 23.1945C94.1026 23.574 94.0873 24.2189 94.057 25.1292C93.9962 27.2232 93.431 28.7903 92.3611 29.8296C91.2915 30.869 89.7699 31.3887 87.7975 31.3887C85.8245 31.3887 84.2994 30.869 83.2222 29.8296Z" fill="currentColor"/>
                                <path d="M107.668 29.2727C108.73 29.2727 109.577 29.1247 110.207 28.8288C110.836 28.5329 111.291 28.0704 111.572 27.4402C111.853 26.8109 112.008 25.9572 112.039 24.8795C112.069 23.9693 112.084 23.4002 112.084 23.1725C112.084 22.9299 112.069 22.3683 112.039 21.488C112.008 19.9709 111.648 18.859 110.958 18.1534C110.267 17.4477 109.133 17.0948 107.555 17.0948H104.163V29.2727H107.668ZM102.16 31.0141C102.069 30.9156 102.023 30.7904 102.023 30.6385V15.7748C102.023 15.608 102.069 15.4753 102.16 15.3764C102.251 15.2779 102.372 15.2285 102.524 15.2285H107.668C109.959 15.2285 111.614 15.7407 112.631 16.7648C113.647 17.7891 114.17 19.3335 114.201 21.3969C114.216 21.8372 114.224 22.4291 114.224 23.1725C114.224 23.9162 114.216 24.5153 114.201 24.9706C114.17 26.4125 113.94 27.5848 113.507 28.4873C113.074 29.3904 112.395 30.0619 111.47 30.502C110.544 30.9422 109.315 31.1621 107.782 31.1621H102.524C102.372 31.1621 102.251 31.113 102.16 31.0141Z" fill="currentColor"/>
                                <path d="M122.839 30.1708C121.754 29.3594 121.181 28.1642 121.121 26.5858C121.121 26.4492 121.167 26.3318 121.257 26.2329C121.348 26.1344 121.463 26.085 121.599 26.085H122.76C123.094 26.085 123.283 26.2599 123.329 26.6085C123.42 27.5951 123.799 28.3236 124.467 28.7939C125.134 29.2644 125.969 29.4993 126.971 29.4993C128.124 29.4993 129.015 29.1201 129.646 28.3611C130.275 27.6026 130.59 26.5783 130.59 25.2885V17.1396H122.464C122.312 17.1396 122.187 17.0904 122.088 16.9913C121.989 16.8931 121.94 16.7679 121.94 16.616V15.751C121.94 15.5994 121.989 15.4742 122.088 15.3754C122.187 15.2768 122.312 15.2274 122.464 15.2274H132.229C132.396 15.2274 132.528 15.2768 132.627 15.3754C132.726 15.4742 132.775 15.6069 132.775 15.7737V25.334C132.775 26.5483 132.544 27.6101 132.081 28.5207C131.618 29.431 130.946 30.1367 130.066 30.6375C129.186 31.1383 128.147 31.3887 126.948 31.3887C125.294 31.3887 123.924 30.9828 122.839 30.1708Z" fill="currentColor"/>
                                <path d="M141.312 31.0141C141.221 30.9156 141.176 30.7904 141.176 30.6385V15.7521C141.176 15.6005 141.221 15.4753 141.312 15.3764C141.403 15.2779 141.524 15.2285 141.677 15.2285H142.815C142.981 15.2285 143.111 15.274 143.201 15.3651C143.293 15.4561 143.338 15.5852 143.338 15.7521V30.6385C143.338 30.7904 143.289 30.9156 143.19 31.0141C143.091 31.113 142.966 31.1621 142.815 31.1621H141.677C141.524 31.1621 141.403 31.113 141.312 31.0141Z" fill="currentColor"/>
                                <path d="M152.033 31.0141C151.942 30.9156 151.896 30.7904 151.896 30.6385V15.7748C151.896 15.608 151.942 15.4753 152.033 15.3764C152.124 15.2779 152.245 15.2285 152.397 15.2285H153.399C153.55 15.2285 153.664 15.259 153.74 15.3195C153.816 15.3803 153.892 15.4561 153.968 15.5472L161.593 27.2925V15.7748C161.593 15.608 161.642 15.4753 161.741 15.3764C161.84 15.2779 161.965 15.2285 162.117 15.2285H163.141C163.308 15.2285 163.441 15.2779 163.539 15.3764C163.638 15.4753 163.687 15.608 163.687 15.7748V30.6155C163.687 30.7676 163.638 30.8967 163.539 31.0028C163.441 31.1091 163.315 31.1621 163.164 31.1621H162.139C161.881 31.1621 161.699 31.0561 161.593 30.8434L153.968 19.2119V30.6385C153.968 30.7904 153.918 30.9156 153.82 31.0141C153.721 31.113 153.596 31.1621 153.444 31.1621H152.397C152.245 31.1621 152.124 31.113 152.033 31.0141Z" fill="currentColor"/>
                                <path d="M65.25 47V41H67.5963C68.0393 41 68.4074 41.0684 68.7007 41.2051C68.9959 41.3398 69.2164 41.5244 69.3621 41.7588C69.5097 41.9932 69.5835 42.2588 69.5835 42.5557C69.5835 42.7998 69.5356 43.0088 69.4399 43.1826C69.3441 43.3545 69.2154 43.4941 69.0538 43.6016C68.8922 43.709 68.7116 43.7861 68.5121 43.833V43.8916C68.7296 43.9033 68.9381 43.9688 69.1376 44.0879C69.3391 44.2051 69.5037 44.3711 69.6314 44.5859C69.7591 44.8008 69.8229 45.0605 69.8229 45.3652C69.8229 45.6758 69.7461 45.9551 69.5925 46.2031C69.4389 46.4492 69.2074 46.6436 68.8982 46.7861C68.5889 46.9287 68.1999 47 67.731 47H65.25ZM66.3603 46.0918H67.5544C67.9575 46.0918 68.2478 46.0166 68.4253 45.8662C68.6049 45.7139 68.6947 45.5186 68.6947 45.2803C68.6947 45.1025 68.6498 44.9424 68.56 44.7998C68.4702 44.6553 68.3425 44.542 68.1769 44.46C68.0113 44.376 67.8138 44.334 67.5844 44.334H66.3603V46.0918ZM66.3603 43.5518H67.4587C67.6502 43.5518 67.8228 43.5176 67.9764 43.4492C68.13 43.3789 68.2507 43.2803 68.3385 43.1533C68.4283 43.0244 68.4732 42.8721 68.4732 42.6963C68.4732 42.4639 68.3894 42.2725 68.2218 42.1221C68.0562 41.9717 67.8098 41.8965 67.4826 41.8965H66.3603V43.5518Z" fill="currentColor"/>
                                <path d="M72.0554 41H73.3094L74.8088 43.6543H74.8686L76.368 41H77.622L75.3923 44.7617V47H74.285V44.7617L72.0554 41Z" fill="currentColor"/>
                                <path d="M83.8698 47V41H87.8562V41.9111H84.9801V43.54H87.6497V44.4512H84.9801V46.0889H87.8801V47H83.8698Z" fill="currentColor"/>
                                <path d="M92.7514 47H90.6745V41H92.7933C93.4019 41 93.9246 41.1201 94.3616 41.3604C94.8005 41.5986 95.1377 41.9414 95.3731 42.3887C95.6085 42.8359 95.7263 43.3711 95.7263 43.9941C95.7263 44.6191 95.6075 45.1562 95.3701 45.6055C95.1347 46.0547 94.7945 46.3994 94.3496 46.6396C93.9067 46.8799 93.3739 47 92.7514 47ZM91.7848 46.0596H92.6976C93.1245 46.0596 93.4807 45.9834 93.766 45.8311C94.0513 45.6768 94.2658 45.4473 94.4094 45.1426C94.5531 44.8359 94.6249 44.4531 94.6249 43.9941C94.6249 43.5352 94.5531 43.1543 94.4094 42.8516C94.2658 42.5469 94.0533 42.3193 93.772 42.1689C93.4927 42.0166 93.1455 41.9404 92.7305 41.9404H91.7848V46.0596Z" fill="currentColor"/>
                                <path d="M98.4667 47V41H102.453V41.9111H99.577V43.54H102.247V44.4512H99.577V46.0889H102.477V47H98.4667Z" fill="currentColor"/>
                                <path d="M110.308 41V47H109.321L106.433 42.9131H106.382V47H105.271V41H106.265L109.15 45.0898H109.204V41H110.308Z" fill="currentColor"/>
                                <path d="M113.204 47V41H114.314V46.0889H117.013V47H113.204Z" fill="currentColor"/>
                                <path d="M120.68 47H119.495L121.653 41H123.023L125.184 47H123.999L122.362 42.2305H122.314L120.68 47ZM120.719 44.6475H123.951V45.5205H120.719V44.6475Z" fill="currentColor"/>
                                <path d="M127.677 47V41H130.023C130.466 41 130.834 41.0684 131.128 41.2051C131.423 41.3398 131.643 41.5244 131.789 41.7588C131.937 41.9932 132.011 42.2588 132.011 42.5557C132.011 42.7998 131.963 43.0088 131.867 43.1826C131.771 43.3545 131.642 43.4941 131.481 43.6016C131.319 43.709 131.139 43.7861 130.939 43.833V43.8916C131.157 43.9033 131.365 43.9688 131.565 44.0879C131.766 44.2051 131.931 44.3711 132.058 44.5859C132.186 44.8008 132.25 45.0605 132.25 45.3652C132.25 45.6758 132.173 45.9551 132.02 46.2031C131.866 46.4492 131.634 46.6436 131.325 46.7861C131.016 46.9287 130.627 47 130.158 47H127.677ZM128.787 46.0918H129.981C130.385 46.0918 130.675 46.0166 130.852 45.8662C131.032 45.7139 131.122 45.5186 131.122 45.2803C131.122 45.1025 131.077 44.9424 130.987 44.7998C130.897 44.6553 130.77 44.542 130.604 44.46C130.438 44.376 130.241 44.334 130.011 44.334H128.787V46.0918ZM128.787 43.5518H129.886C130.077 43.5518 130.25 43.5176 130.403 43.4492C130.557 43.3789 130.678 43.2803 130.766 43.1533C130.855 43.0244 130.9 42.8721 130.9 42.6963C130.9 42.4639 130.816 42.2725 130.649 42.1221C130.483 41.9717 130.237 41.8965 129.91 41.8965H128.787V43.5518Z" fill="currentColor"/>
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
									<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M24.9981 2.286C24.1161 2.67667 23.1674 2.93733 22.1668 3.06067C23.1841 2.45667 23.9668 1.49333 24.3341 0.355333C23.3821 0.913334 22.3274 1.32333 21.2054 1.53933C20.3094 0.589333 19.0314 0 17.6154 0C14.8954 0 12.6908 2.18533 12.6908 4.88C12.6908 5.26133 12.7354 5.63267 12.8194 5.99333C8.72743 5.788 5.09809 3.84267 2.67009 0.890667C2.24343 1.612 2.00343 2.45667 2.00343 3.348C2.00343 5.042 2.87076 6.53333 4.19343 7.412C3.38609 7.38733 2.62609 7.16267 1.96076 6.80267C1.96076 6.81734 1.96076 6.83934 1.96076 6.86C1.96076 9.22734 3.65876 11.1987 5.90943 11.6473C5.49809 11.76 5.06343 11.8227 4.61543 11.8227C4.29743 11.8227 3.98743 11.7867 3.68743 11.7327C4.31409 13.6673 6.13209 15.0813 8.28609 15.1233C6.60076 16.43 4.47809 17.2127 2.17009 17.2127C1.77143 17.2127 1.38143 17.19 0.996094 17.1433C3.17676 18.524 5.76609 19.3333 8.54543 19.3333C17.6021 19.3333 22.5568 11.896 22.5568 5.444C22.5568 5.23267 22.5501 5.022 22.5401 4.814C23.5068 4.13133 24.3401 3.27 24.9981 2.286Z" fill="currentColor"/>
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
						<img src="/wp-content/uploads/2023/08/fhir_walp.png" style="max-width: 400px;" alt="The Ultimate Guide to FHIR" />
					</div>
					<div>
						<div class="head">
							<h2>The Ultimate Guide <br/>to FHIR</h2>
							<p>The Only Guide You Will Need</p>
						</div>
                        <div class="form kodjin_contact_from" data-name="<?php if ( is_page_template('page-what-is-fhir.php') ) { ?>wp_guide<?php } else { ?>ultimate_guide_to_FHIR<?php } ?>" data-file="https://kodjin.com/wp-content/uploads/2023/07/fin_ultimate-guide-to-fhir.pdf" data-file-name="The Ultimate Guide to FHIR">
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
