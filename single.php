<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage HrOne_Theme
 * @since HrOne Theme 1.0
 */

get_header(); ?>




<section class="blog-page">
	<div class="container">
		<div class="row">			
			<div class="col s10 blog-wrapper">
				<div class="row">
					<div class="col s12">
						<div class="search-input">
							<input type="search" placeholder="Let's find what you're looking for…">
							<i class="search-icons"></i>
						</div>
					</div>
				</div>					
				<div class="row">
					<div class="col s12">
						<ul class="tags">
							<li class="tag active">Payroll</li> 
							<li class="tag">Engagement</li>
							<li class="tag">Peformance</li>
							<li class="tag">Training</li>
							<li class="tag">Compliance</li>
							<li class="tag">HR-Tech</li>
							<li class="tag">Time Management</li>
							<li class="tag">Recruitment</li>
						</ul>
						<span class="next-circle"><img src="<?php echo get_template_directory_uri(); ?>/img/blog/forward-arrow.png" alt=""></span>
					</div>
				</div>
				<div class="row">
					<div class="col s8">
						<div class="featured-post z-depth-1">
							<a href="">
								<img src="<?php echo get_template_directory_uri(); ?>/img/blog/featured-img-01.jpg" alt="">
							</a>
							<div class="featured-tag">FEATURED</div>
							<div class="detail-card">
								<div>
									<span class="post-dated"><i class="dated-icon"></i>28 Nov 2018</span>
									<span class="post-read pull-right"><i class="read-icon"></i>10 Min Read</span>
								</div>
								<p>Top Four Reasons to Switch to a Cloud Based HRMS</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="sub-box z-depth-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blog/sub-envelope.png" alt="">
							<h4>
								<span>Subscribe &</span>
								Stay up to Speed!
							</h4>
							<div class="input-field">
								<input value="" id="sub" type="email" class="validate" placeholder="Typeyour@email.com">
								<button type="button" class="sub-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/blog/arrow-big.png" alt=""></button>										
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 post-tiles">
						<ul>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-img-01.jpg" alt="">										
									<div class="view-tag"><i class="views-icon"></i>7K</div>
									<div class="detail-card">
										<div>
											<span class="post-dated"><i class="dated-icon"></i>28 Nov 2018</span>
											<span class="post-read pull-right"><i class="read-icon"></i>10 Min Read</span>
										</div>
										<p>Top Four Reasons to Switch to a Cloud Based HRMS</p>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-img-01.jpg" alt="">										
									<div class="view-tag"><i class="views-icon"></i>7K</div>
									<div class="detail-card">
										<div>
											<span class="post-dated"><i class="dated-icon"></i>28 Nov 2018</span>
											<span class="post-read pull-right"><i class="read-icon"></i>10 Min Read</span>
										</div>
										<p>Top Four Reasons to Switch to a Cloud Based HRMS</p>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-img-01.jpg" alt="">										
									<div class="view-tag"><i class="views-icon"></i>7K</div>
									<div class="detail-card">
										<div>
											<span class="post-dated"><i class="dated-icon"></i>28 Nov 2018</span>
											<span class="post-read pull-right"><i class="read-icon"></i>10 Min Read</span>
										</div>
										<p>Top Four Reasons to Switch to a Cloud Based HRMS</p>
									</div>
								</a>
							</li>
						</ul>
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
