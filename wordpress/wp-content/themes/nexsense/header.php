<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600|Montserrat:400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/nexsense.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div class="main">
		<header class="global-header hidden-xs hidden-sm hidden-md hidden-lg visible-xl visible-xxl">
			<div class="container-fluid">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a>
				<nav class="top-navigation">
					<span class="contact-us">Contact us today 866.205.5200</span>
					&nbsp;|&nbsp;
					<span><a href="https://portal.myhomecontrol.com/myhome/access/signin.jsp">Login</a></span>
					&nbsp;|&nbsp;
					<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
			</div>
		</header>
		<header class="global-header visible-xs visible-sm visible-md visible-lg hidden-xl hidden-xxl">
			<span class="btn btn-default icomoon icomoon-menu" data-toggle="modal" data-target="#mobile-navigation"></span>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a>
			<div class="top-navigation mobile-quote">
				<span><a href="https://portal.myhomecontrol.com/myhome/access/signin.jsp">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
				<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
			</div>
		</header>
		<header class="gold-bar visible-xs hidden-sm hidden-md hidden-lg hidden-xl hidden-xxl">
			<span><a href="https://portal.myhomecontrol.com/myhome/access/signin.jsp">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
			<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
		</header>