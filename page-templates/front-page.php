<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in HrOne Theme consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage HrOne_Theme
 * @since HrOne Theme 1.0
 */

get_header(); ?>

<section id="clients-counting" class="section">
	<div class="container">
		<div class="row">
			<div class="col s5 pos-rel full-height">
				<span class="clients-circle"></span>
				<span class="clients-mobile"></span>
			</div>
			<div class="col s7 valign-wrapper full-height">
				<div class="inner-clients-counting">
					<h2 class="text-title mt0 mb10">
						300+ HRMS Clients &amp; <span class="secondarycolor">Counting</span>
					</h2>
					<p class="fs16">Our claims are backed by the unshakeable trust of <strong>300+</strong> companies, <strong>2,00,000+</strong> users spread over <strong>18+</strong> industry verticals.</p>
					<ul id="clients-logo-box" class="mb35">
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-1.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-2.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-3.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-4.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-5.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-6.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-7.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-8.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-9.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-10.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-11.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-12.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-13.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-14.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/img/clients/client-15.png" alt="">
						</li>
					</ul>
					<a href="#">
						<span class="custombtn bgorange whitecolor orangeshadow waves-effect waves-light">Talk to Experts</span>	
					</a>
					<a href="#">
						<span class="custombtn white orangecolor waves-effect waves-light ml10">Request a Demo</span>	
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- we make hr simpler -->
<section id="hr-simpler" class="section">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 class="text-title center">
					We make HR <span class="secondarycolor">Simpler, Faster &amp; Better</span>
				</h2>
				<p class="fs16 center mb35">Watch this video to unravel the magic yourself!</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div id="joy-video">
					<div class="joy-laptop-video-wrap">
						<span class="joy-pic"></span>
						<video class="video" id="bVideo" loop controls controlsList="nodownload">
							<source src="<?php echo get_template_directory_uri(); ?>/video/HR-One-Final.mp4?title=0&byline=0&portrait=0&color=ffffff" type="video/mp4" />
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="free-trail" class="section fp-auto-height">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="free-trial-box trail-box-bg">
					<span class="trail-text">
						<i>15 days</i> Free Trial
					</span>
					<div class="trail-button">
						<p class="fs18 whitecolor fw300"><strong>Sign up</strong> for no cost, no commitment 15 days trial and let our experts show you how you can improve your HR-function.</p>
						<p><a href="#"><span class="white-button secondarycolor">Sign Up Now</span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="power-of-hrone" class="section">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 class="text-title center">
					We make HR <span class="secondarycolor">Simpler, Faster &amp; Better</span>
				</h2>
				<p class="fs16 center mb35">Watch this video to unravel the magic yourself!</p>
			</div>
			<div class="col s12">
				<!--card slider section-->
				<div class="card_section">
					<div class="card_list">
						<ul class="card_list_box">
							<li>
								<a class="card1_click active-card" href="javascript:void(0)">
									<div class="card_image">
										<img class="card_inactive" alt="simple hr software" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon1.png">
										<img class="card_active" alt="simple hr software in violet" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon1_active.png">
									</div>
									<div class="card_content">
										<span>Simple</span>
									</div>
								</a>
							</li>
							<li>
								<a class="card2_click" href="javascript:void(0)">
									<div class="card_image">
										<img class="card_inactive" alt="scalable hr management solution" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon2.png">
										<img class="card_active" alt="scalable hr solution" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon2_active.png">
									</div>
									<div class="card_content">
										<span>Scalable</span>
									</div>
								</a>
							</li>
							<li>
								<a class="card3_click " href="javascript:void(0)">
									<div class="card_image">
										<img class="card_inactive" alt="accessible hrms system" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon3.png">
										<img class="card_active" alt="accessible hrms solution" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon3_active.png">

									</div>
									<div class="card_content">
										<span>Accessible</span>
									</div>
								</a>
							</li>
							<li>
								<a class="card4_click " href="javascript:void(0)" rel="active-card">
									<div class="card_image">
										<img class="card_inactive" alt="affordable hrms software" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon4.png">
										<img class="card_active" alt="affordable hrms solutions" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon4_active.png">
									</div>
									<div class="card_content">
										<span>Affordable</span>
									</div>
								</a>
							</li>
							<li>
								<a class="card5_click" href="javascript:void(0)">
									<div class="card_image">
										<img class="card_inactive" alt="analytical hr-one software" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon5.png">
										<img class="card_active" alt="hr-one software analytics" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon5_active.png">
									</div>
									<div class="card_content">
										<span>Analytics</span>
									</div>
								</a>
							</li>
							<li>
								<a class="card6_click" href="javascript:void(0)">
									<div class="card_image">
										<img class="card_inactive" alt="hr software integration" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon6.png">
										<img class="card_active" alt="easy to integrate hr system" src="<?php echo get_template_directory_uri(); ?>/img/card/card_icon6_active.png">
									</div>
									<div class="card_content">
										<span>Integration</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="cards_images">
						<div class="cards_section">
							<div class="first_card" >
								<div class="cards_container">
									<img class="card_active" alt="" src="<?php echo get_template_directory_uri(); ?>/img/card/icon1.png">
									<h3>Simple</h3>
									<p>HR-One is a modern and intuitive software that enables users to work incredibly faster, simpler, smarter and as they want. With a short learning path, it is way simpler for users to find information or surf  without getting lost.</p>

								</div>
							</div>
							<div class="second_card">
								<div class="cards_container">
									<img class="card_active" src="<?php echo get_template_directory_uri(); ?>/img/card/icon2.png" alt="">
									<h3>Scalable</h3>
									<p>Is your headcount 50+ or 10,000+? HR-One can scale according to your organization size. Following a la carte style, you can either pick one or all of the 12+ modules to solve your current and future business needs.</p>
								</div>
							</div>
							<div class="third_card" >
								<div class="cards_container">
									<img class="card_active" alt="" src="<?php echo get_template_directory_uri(); ?>/img/card/icon3.png" >

									<h3>Accessible</span>
									</h3>
									<p>Accessibility is what makes HR-One even better. Always stay updated with your remote employees when you are on the move. Messages, reports, status, calls, contacts and attendance can be updated on the go. On top of that, Geo Tracking and Geofencing makes it easy for you to know the actual working hours of your remote employees with greater ease.</p>

								</div>
							</div>
							<div class="fourth_card">
								<div class="cards_container">
									<img class="card_active" alt="" src="<?php echo get_template_directory_uri(); ?>/img/card/icon4.png">
									<h3>Affordable</h3>
									<p>Pay only for what you use. If you don’t require all the modules, the software can be tailor-made according to your needs. There is also an option to choose between cloud and on-premise services. There are per user, per month pricing plans as well.</p>

								</div>
							</div>
							<div class="five_card">
								<div class="cards_container">
									<img class="card_active" alt="" src="<?php echo get_template_directory_uri(); ?>/img/card/icon5.png">
									<h3>Analytics</h3>
									<p>Get a hawk's eye view of all sorts of reports. Make proactive decisions on the basis of real-time insights. See analytics, dashboards, and insights on the basis of your role in the organisation.</p>

								</div>
							</div>
							<div class="six_card">
								<div class="cards_container">
								<img class="card_active" alt="" src="<?php echo get_template_directory_uri(); ?>/img/card/icon6.png">

									<h3>Integration</h3>
									<p>Integrate HR-One with other tools without any complexity. Biometric devices, analytical tools, and financial tools are just a few tools to name that can be integrated effortlessly with the software. Basically, it is a cinch to use this software because of the simple API. </p>

								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--card slider section end-->
			</div>
		</div>
	</div>
</section>
<section id="customers-speak" class="section">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 class="text-title center">
					The Customers <span class="secondarycolor">Speak</span>
				</h2>
				<p class="fs16 center mb35">See our customers confess their love</p>
			</div>
			<div class="col s12">
				
			</div>
		</div>
	</div>
</section>
<section id="hrone-community" class="section">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 class="text-title center">
					The HR-One Community <br><span class="secondarycolor">2,00,000+ Users</span>
				</h2>
			</div>
		</div>
	</div>
	<div class="people-tex">
		<div class="people-wrapper">
			<div class="people people-1 move-to-position interactiv">
				<div class="people-photo" data-aos="fade-up-right"></div>
			</div>
			<div class="people people-2 move-to-position">
				<div class="people-photo" data-aos="fade-up-right" ></div>
			</div>
			<div class="people people-3 move-to-position">
				<div class="people-photo" data-aos="fade-up-right" ></div>
			</div>
			<div class="people people-4 interactive move-to-position">
				<div class="people-photo" data-aos="fade-up-right" >

					<div class="people-popup position-right" style="min-width:200px">
						<div class="people-popup-box" data-aos="fade-up-right">
							<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
							<div class="feedback">“HR-One has been a blessing in disguise! It’s incredibly easy to use. Our employees adapted it in no time and HR-One has helped us streamline the time office and workforce processes.“</div>
							<div class="name">Ms. Romika Sharma
								<div class="text-sky-blue">T.R Sawhney Group, H.R Head</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="people people-5">
				<div class="people-photo" data-aos="fade-up-left" ></div>
			</div>
			<div class="people people-6">
				<div class="people-photo" data-aos="fade-up-left"  ></div>
			</div>
			<div class="people people-7">
				<div class="people-photo" data-aos="fade-up-left"  ></div>
			</div>
			<div class="people people-8 interactive">
				<div class="people-photo" data-aos="fade-up-left"  >

					<div class="people-popup position-right" style="min-width:200px">
						<div class="people-popup-box" data-aos="fade-left">
							<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
							<div class="feedback">“HR-One helped us in processing payroll, which was a typical and time consuming activity for our business. We can’t be thankful enough to HR-One for solving our complex payroll requirements.“</div>
							<div class="name">Mr. Satya Narayan
								<div class="text-sky-blue"> Haier, Head HR Operations</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="people people-9">
				<div class="people-photo" data-aos="fade-up-left"  ></div>
			</div>
			<div class="people people-10">
				<div class="people-photo" data-aos="fade-up-left"  ></div>
			</div>
			<div class="people people-11">
				<div class="people-photo" data-aos="fade-up-right"  ></div>
			</div>
			<div class="people people-12 interactive">
				<div class="people-photo" data-aos="fade-up-right" >

					<div class="people-popup position-right" style="min-width:200px">
						<div class="people-popup-box" data-aos="fade-left">
							<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
							<div class="feedback">“HR-One has helped us conduct reviews and appraisals in a clear and simple way.  Amazingly, we’re able to clearly define KRAs for goal setting, review ratings and to capture 360-degree feedback for peers with HR-One HRMS.“</div>
							<div class="name">Ms. Akanksha Chaudhary
								<div class="text-sky-blue">Hanu Software Sr. Exec HR </div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="people people-13">
				<div class="people-photo" data-aos="fade-up-right"  ></div>
			</div>
			<div class="people people-14">
				<div class="people-photo"  data-aos="fade-up-right" ></div>
			</div>
			<div class="people people-15 interactive">
				<div class="people-photo"  data-aos="fade-up-right"  >

					<div class="people-popup position-right" style="min-width:200px">
						<div class="people-popup-box" data-aos="fade-left">
							<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
							<div class="feedback">“HR-One has seamlessly merged with our expectations and helped us streamline all our time office, workforce and payroll processes.“</div>
							<div class="name">Mr. Dalip Kr. Rongta
								<div class="text-sky-blue"> Deputy Manager- ERP Bikanerwala </div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="people people-16 interactive">
				<div class="people-photo">

					<div class="people-popup position-right" style="min-width:200px">
						<div class="people-popup-box" data-aos="fade-left">
							<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
							<div class="feedback">“All the functions, from leave to payroll management are really easy to operate. HR-One is really a “Wow” platform to work on.“</div>
							<div class="name">Praveen,
								<div class="text-sky-blue"> V.P HR, Agarwal Movers Group</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="people people-17">
				<div class="people-photo" data-aos="fade-left" ></div>
			</div>
			<div class="people people-18">
				<div class="people-photo" data-aos="fade-left" ></div>
			</div>
			<div class="people people-19">
				<div class="people-photo"data-aos="fade-left" ></div>
			</div>
			<div class="people people-20">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
			<div class="people people-21">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-22">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-23">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-24">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-25">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-26">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
			<div class="people people-27">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
			<div class="people people-28">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
			<div class="people people-29">
				<div class="people-photo" data-aos="fade-left" ></div>
			</div>
			<div class="people people-30">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
			<div class="people people-31">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-32">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-33">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-34">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-35">
				<div class="people-photo" data-aos="fade-right"></div>
			</div>
			<div class="people people-36">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
			<div class="people people-37">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
			<div class="people people-38">
				<div class="people-photo" data-aos="fade-left"></div>
			</div>
		</div>
	</div>
</section>
<?php
while ( have_posts() ) :
	the_post();
?>

	<?php the_content(); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
