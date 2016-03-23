<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> style="margin-top: 0!important">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="<?php bloginfo('template_directory')?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory')?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory')?>/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory')?>/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory')?>/css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->




 
<?php wp_head(); ?>
</head>

<body>
<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
		<nav class="main-nav-outer" id="test"><!--main-nav-start-->
			<div class="container">
		        <ul class="main-nav">
		        	<li><a href="<?php echo get_home_url();?>"><i class="fa fa-home"></i></a></li>
		        </ul>
		    </div>
		</nav><!--main-nav-end-->
        <!--<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-nav' ) ); ?>-->
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->
