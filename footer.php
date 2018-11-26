<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage HrOne_Theme
 * @since HrOne Theme 1.0
 */
?>

<?php if(is_front_page()): ?>
</div><!-- // for fullpage -->
<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easings.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fullpage.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/card-slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
