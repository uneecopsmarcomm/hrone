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

<section id="blog-side-menu">
	<div class="container">
		<div class="row">
			<div class="col s2">
				<h3 class="side-heading">Resource <span>Centre</span></h3>
				<ul>
					<li>Blogs</li>
					<li>Letter Templates</li>
					<li>Checklists</li>
					<li>HR Policies</li>
					<li>Forms</li>
					<li>Whitepapers</li>
					<li>Infographics</li>
					<li>Brochures</li>
					<li>HR Glossaries</li>
				</ul>
			</div>
			<div class="col s9">
			hello
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
