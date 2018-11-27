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

dfrtertert


<?php get_footer(); ?>
