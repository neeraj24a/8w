<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
    <head>
	<title>8thwonderpromos</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/animations.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/fonts.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/cue.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/mediaelementplayer-legacy.css">
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/html5shiv.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/respond.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
    </head>
    <body>
	<!--[if lt IE 9]>
            <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
            <div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <i class="rt-icon2-cross2"></i>
                </span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form form-inline" action="./">
                    <div class="form-group bottommargin_0">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                    </div>
                    <button type="submit" class="theme_button no_bg_button">Search</button> 
                </form>
            </div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls with_padding"></div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
            <div id="box_wrapper">
                <!-- template sections -->
                <section class="page_topline ds table_section table_section_md">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 text-center text-md-left">
                                <div class="inline-content medium">
                                    <p> 
                                        <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i> 1833 DJ Promo 
                                    </p>
                                    <p class="greylinks"> 
                                        <i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i> 
                                        <a href="mailto:support@8thwonderpromos.com">support@8thwonderpromos.com</a> 
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center text-md-center"> 
                                <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> 
                                <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> 
                                <a class="social-icon socicon-google" href="#" title="Twitter"></a> 
                                <a class="social-icon socicon-linkedin" href="#" title="Twitter"></a> 
                                <a class="social-icon socicon-youtube" href="#" title="Youtube"></a> 
                            </div>
                        </div>
                    </div>
                </section>
                <header class="page_header header_white toggler_xs_right tall_header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 display_table">
                                <div class="header_left_logo display_table_cell"> 
                                    <a href="./" class="logo top_logo">
                                        <img src="http://pool.8thwonderpromos.com/images/logo.png" width="130" height="100" alt="">
                                    </a> 
                                </div>
                                <div class="header_mainmenu display_table_cell text-center">
                                    <!-- main nav start -->
                                    <nav class="mainmenu_wrapper">
                                        <ul class="mainmenu nav sf-menu">
                                            <li class="active"> 
                                                <a href="/">Home</a>
                                            </li>
                                            <li> <a href="http://pool.8thwonderpromos.com">Pool</a>
                                                <ul>
                                                    <li> 
                                                            <a href="http://pool.8thwonderpromos.com">Recordpool</a>
                                                    </li>
                                                    <li> <a href="http://pool.8thwonderpromos.com/trending">Trending</a> </li>
                                                    <li> <a href="http://pool.8thwonderpromos.com/browse">Browse</a> </li>
                                                    <li> <a href="http://pool.8thwonderpromos.com/login">Login</a> </li>
                                                </ul>
                                            </li>
                                            <!-- shop -->
                                            <li><a href="javascript:void(0);">Store</a></li>
                                            <!-- eof shop -->
                                            <!-- contacts -->
                                            <li> <a href="http://pool.8thwonderpromos.com/contact">Contacts</a></li>
                                            <!-- eof contacts -->
                                        </ul>
                                    </nav>
                                    <!-- eof main nav -->
                                    <!-- header toggler -->
                                    <span class="toggle_menu"><span></span></span>
                                </div>
                                <div class="header_right_buttons display_table_cell text-right hidden-xs"> 
                                    <a href="https://www.8thwonderpromos.com/choose-plan.php" class="theme_button color1">Sign Up</a> 
                                </div>
                                <div class="header_right_buttons display_table_cell text-right hidden-xs"> 
                                    <a href="https://www.8thwonderpromos.com/amember/login" class="theme_button color1">Sign In</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

