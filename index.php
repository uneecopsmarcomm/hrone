<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage HrOne_Theme
 * @since HrOne Theme 1.0
 */

get_header(); ?>

	
<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
	<?php
	while ( have_posts() ) :
		the_post();
?>
		
	<?php endwhile; ?>
	<?php hronetheme_content_nav( 'nav-below' ); ?>
<?php else : ?>
<?php endif; // end have_posts() check ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col s2 blog-side-menu">
				<h3 class="side-heading">Resource <span>Centre</span></h3>
				<ul>
					<li class="active"> 
						<a href="">Blogs</a>
					</li>
					<li>
						<a href="">Letter Templates</a>
					</li>
					<li><a href="">Checklists</a></li>
					<li>
						<a href="">HR Policies</a>
					</li>
					<li>
						<a href="">Forms</a>
					</li>
					<li>
						<a href="">Whitepapers</a>
					</li>
					<li>
						<a href="">Infographics</a>
					</li>
					<li>
						<a href="">Brochures</a>
					</li>
					<li>
						<a href="">HR Glossaries</a>
					</li>
				</ul>
			</div>
			<div class="col s10 brdr">
				<div class="blog-wrapper">
					<div class="container">
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
		</div>
	</div>
</section>


<?php get_footer(); ?>
