<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage HrOne_Theme
 * @since HrOne Theme 1.0
 */

get_header(); ?>




<section class="blog-inner-page">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="blog-wrapper">
					<div class="container">
						<div class="row">
							<div class="col s12">
								<div class="back-btn">
								<a class="fs18 secondarycolor" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/blog/backward-arrow.png" alt=""> Back to all Posts</a>
								</div>
								<h2 class="blog-heading">
									Top Four Reasons to Switch to a Cloud Based HRMS
									<span>
										Here are five steps to get you started:
									</span>
								</h2>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<div class="featured-post z-depth-1">
									<a href="">
										<img src="<?php echo get_template_directory_uri(); ?>/img/blog/featured-img-01.jpg" alt="">
									</a>
									<div class="featured-tag">FEATURED</div>
									<div class="caption-card">
										<div>
											<span class="post-dated"><i class="dated-icon"></i>28 Nov 2018</span>
											<span class="post-read"><i class="read-icon"></i>10 Min Read</span>
											<span class="view-tag"><i class="views-icon"></i>7K Views</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col s12 blog-content">
								<p>
									Every business leader is well versed with the benefits of employee engagement.  Employee engagement has emerged as a critical driver of business success in today’s dynamic marketplace. However, getting employees engaged involves more than a strong leadership, recognition, rewards, workplace atmosphere; although these factors help. At the same time, high levels of engagement promote great working culture, happy employees, less attrition rates, customer loyalty and improve organizational performance.
								</p>
								<p>
									If you’re a business leader ready to instill an effective culture of engagement in your business, here are five steps to get you started.
								</p>

								<!-- list start -->
								<ul>
									<li>
										<h5>
											Invest in digital processes to enhance the employee experience
										</h5>
										<p>
											Carefully examine as how experiences at every stage of the employee lifecycle could be improved upon, which includes recruitment, time office, onboarding, performance lifecycle, and learning and development. Employees expect one comprehensive portal by which they can   manage their own dashboard, view and update certain fields and records, and can raise tickets to respective departments hassle-free.
										</p>
									</li>
									<li>
										<h5>
											Invest in digital processes to enhance the employee experience
										</h5>
										<p>
											Carefully examine as how experiences at every stage of the employee lifecycle could be improved upon, which includes recruitment, time office, onboarding, performance lifecycle, and learning and development. Employees expect one comprehensive portal by which they can   manage their own dashboard, view and update certain fields and records, and can raise tickets to respective departments hassle-free.
										</p>
									</li>
									<li>
										<h5>
											Invest in digital processes to enhance the employee experience
										</h5>
										<p>
											Carefully examine as how experiences at every stage of the employee lifecycle could be improved upon, which includes recruitment, time office, onboarding, performance lifecycle, and learning and development. Employees expect one comprehensive portal by which they can   manage their own dashboard, view and update certain fields and records, and can raise tickets to respective departments hassle-free.
										</p>
									</li>
									<li>
										<h5>
											Invest in digital processes to enhance the employee experience
										</h5>
										<p>
											Carefully examine as how experiences at every stage of the employee lifecycle could be improved upon, which includes recruitment, time office, onboarding, performance lifecycle, and learning and development. Employees expect one comprehensive portal by which they can   manage their own dashboard, view and update certain fields and records, and can raise tickets to respective departments hassle-free.
										</p>
									</li>
									<li>
										<h5>
											Invest in digital processes to enhance the employee experience
										</h5>
										<p>
											Carefully examine as how experiences at every stage of the employee lifecycle could be improved upon, which includes recruitment, time office, onboarding, performance lifecycle, and learning and development. Employees expect one comprehensive portal by which they can   manage their own dashboard, view and update certain fields and records, and can raise tickets to respective departments hassle-free.
										</p>
									</li>
									<li>
										<h5>
											Invest in digital processes to enhance the employee experience
										</h5>
										<p>
											Carefully examine as how experiences at every stage of the employee lifecycle could be improved upon, which includes recruitment, time office, onboarding, performance lifecycle, and learning and development. Employees expect one comprehensive portal by which they can   manage their own dashboard, view and update certain fields and records, and can raise tickets to respective departments hassle-free.
										</p>
									</li>
								</ul>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/img/blog/inner-img-01.jpg" alt="">
									<figcaption>Figure 1 :- Lorem ipsum dolor sit amet, consectetur adipiscing elit </figcaption>
								</figure>

								<p>
									Every business leader is well versed with the benefits of employee engagement.  Employee engagement has emerged as a critical driver of business success in today’s dynamic marketplace. However, getting employees engaged involves more than a strong leadership, recognition, rewards, workplace atmosphere; although these factors help. At the same time, high levels of engagement promote great working culture, happy employees, less attrition rates, customer loyalty and improve organizational performance.
								</p>
								<p>
									If you’re a business leader ready to instill an effective culture of engagement in your business, here are five steps to get you started.
								</p>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/img/blog/inner-img-02.jpg" alt="">
									<figcaption>Figure 1 :- Lorem ipsum dolor sit amet, consectetur adipiscing elit </figcaption>
								</figure>
							</div>
							<div class="back-btn">
								<a class="fs18 secondarycolor" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/blog/backward-arrow.png" alt=""> Back to all Posts</a>
							</div>
						</div>
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



			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
