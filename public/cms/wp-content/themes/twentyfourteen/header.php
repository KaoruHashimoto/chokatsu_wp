<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css.css">

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                </a>   
            </h1>
            <button class="menu-btn" id="mobile-menu"></button>  
		</div>
	</header><!-- #masthead -->
        <!--===========nav=============-->
    <nav>
        <div class="container nav-container">
            <ul class="navbar">
                <li>
                    <a href="<?php echo home_url(); ?>">ホーム</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/intestine/">そもそも腸って？</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/bacteria/">知ろう！腸内細菌</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/food/">食事で腸活</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/exercise/">運動で腸活</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/qanda/">Q&amp;A</a>
                </li>
            </ul>         
        </div><!--/nav-container-->
    </nav>
    <!--===========/nav============-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    
	<div id="main" class="site-main">
