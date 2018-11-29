<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage HrOne_Theme
 * @since HrOne Theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- //page title -->
<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- //page meta -->
<meta harset="<?php bloginfo( 'charset' ); ?>" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/f-hrone.png" type="image/png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- homepage card css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/card.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/circle.css">

<!-- font -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

<!-- //page stylesheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fullpage.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/materialize.min.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prashantcss.css">

<!-- //page extra links -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- //head function file -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(is_front_page()): ?>
<div id="fullpage">
<?php endif; ?>
<header id="head" class="section left-align">
	<div class="container bg-top">
		<div class="row">
			<div class="col s4">
				<!-- //website logo -->
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo" alt="HR-One logo">
				</a>
			</div>
			<div class="col s8">
				<!-- //right phone icon -->
				<a href="#" class="right header-telephone">
					<span>
						<i></i>
					</span>
				</a>
				<nav class="right">
					<div class="nav-wrapper">
						<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
						<?php
							wp_nav_menu(
								array(
									'container'=> false,
									'theme_location' => 'primary',
									'menu_class'     => 'right hide-on-med-and-down',
									'menu_id' => 'desktop-menu'
								)
							);
						?>
					</div>
				</nav>
				<!-- //mobile HR-One Menu -->
				<?php
					wp_nav_menu(
						array(
							'container'=> false,
							'theme_location' => 'primary',
							'menu_class'     => 'sidenav',
							'menu_id' => 'mobile-nav'
						)
					);
				?>
			</div><!-- //col s8 -->
		</div>
	</div>
	<?php if(is_front_page()): ?>
	<div class="container">
		<div class="row home-front-section">
			<div class="col s6">
				<div class="home-header-text">
					<h1 class="mt0 mb10">
					One HR Software to <span class="secondarycolor">Manage Tickets</span>
					</h1>
					<p class="fs24 mb35">A complete enterprise-ready HR automation tool to simplify HR functions for ambitious HR Professionals and Business Owners.</p>
					<a href="#">
						<span class="custombtn bgorange whitecolor orangeshadow waves-effect waves-light">Request a Demo</span>	
					</a>
					<a href="#">
						<span class="custombtn white orangecolor waves-effect waves-light ml10">15-days Free Trial</span>	
					</a>
				</div>
			</div>
			<div class="col s6">
			</div>
			<span class="home-main-img"></span>
			<span class="scroll-down-mobile">Scroll Down</span>
			<img src="<?php echo get_template_directory_uri(); ?>/img/home-laptop.png" class="home-laptop" alt="">
		</div>
	</div>
	<?php endif; ?>
</header>

