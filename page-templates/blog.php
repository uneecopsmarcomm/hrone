<?php
/**
 * Template Name: Blog Page Template
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





<?php
while ( have_posts() ) :
	the_post();
?>

	<?php the_content(); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
