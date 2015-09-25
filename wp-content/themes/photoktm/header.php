<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.green.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.autoheight.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jcarousel.responsive.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom.css">
</head>

<body <?php body_class(); ?>>
	<header class="header-top">
		<div class="container">
			<div class="row">
				<div class="social-media col-sm-offset-1 col-xs-3">
					<div class="social">
						<a href="https://www.facebook.com/photoktm"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/photoktm"><i class="fa fa-twitter"></i></a>
						<a href="https://instagram.com/photoktm/"><i class="fa fa-instagram"></i></a>
					</div>
				</div><!--./social-media-->
				<div class="col-xs-5 col-sm-4">
					<div class="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/photo-ktm-logo.png" alt=""></a></div>
				</div>
				<div class="col-sm-3 col-xs-4">
					<div class="search">
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</form>
						<!-- <input type="search">
						<a href="#"><i class="fa fa-search"></i></a> -->
					</div>
				</div>
			</div><!--./row-->
		</div>
	</header>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
				</a>-->
			</div>
			
		<?php
		wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'    	=> 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())

			
		);
		?>
		</div>
	</nav>
