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
									
					</div>
				</div>
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
