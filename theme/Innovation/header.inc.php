<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Website Design Templates" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Diet Select-Empowering Health through Informed Choices" />
    <meta name="description" content="Diet Select-Empowering Health through Informed Choices" />
	
	<meta name="robots" content="index, follow">

    <!-- plugins -->
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/plugins.css">

    <!-- theme core css -->
    <link rel="stylesheet"  href="<?php get_theme_url(); ?>/assets/css/styles.css" rel="stylesheet">

	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>
	
</head> 
<body id="<?php get_page_slug(); ?>" >

<div id="preloader"></div>

<div class="main-wrapper">
	
<header class="header-style2">

	<div class="top-bar bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-xs-12">
					<div class="top-bar-info">
						<ul class="ps-0">
							<li><i class="fa fa-phone-alt"></i></i> +254 737 226 850</li>
							<li class="d-none d-sm-inline-block"><i class="fas fa-envelope"></i> info@diet-select.co.ke</li>
							<li><i class="fas fa-map-marker"></i> 8th Flr, Fortis Suites, Hospital Rd, Upper Hill.</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-3 d-none d-md-block">
					<ul class="top-social-icon ps-0">
					<li>
                                    <a target="_blank" href="https://www.instagram.com/dietselect254/"><i class="fab fa-instagram"></i></a>
                                </li>
								<li>
                                    <a target="_blank" href="https://www.tiktok.com/@dietselect254"><i class="fab fa-tiktok"></i></a>
                                </li> 
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/dietselect254/?locale=ja_JP"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/dietselect254?lang=en"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="#!"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/in/awuor-joyce-registered-dietitian-nutritionist-52b153100/"><i class="fab fa-linkedin-in"></i></a>
                                </li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar-default">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-lg-12">
					<div class="menu_area alt-font">
						<nav class="navbar navbar-expand-lg navbar-light p-0">

							<div class="navbar-header navbar-header-custom">
								<!-- start logo -->
								<a href="<?php get_site_url(); ?>" class="navbar-brand logodefault"><img id="logo" src="<?php get_site_url(); ?>./data/uploads/logos/diet-logo.png" alt="logo"></a>
								<!-- end logo -->
							</div>

							<div class="navbar-toggler"></div>

							<!-- start menu area -->
							<ul class="navbar-nav ms-auto" id="nav" style="display: none;">
								<li><a href="<?php get_site_url(); ?>">Home</a> </li>

								<li><a href="#!">About Us</a>
									<ul>
										<li><a href="<?php get_site_url(); ?> about-us/">Who we are</a></li>
										<li><a href=" <?php get_site_url(); ?> our-team/">Our Team</a></li>
										<li><a href="<?php get_site_url(); ?> success-story/">Success Story</a></li>
									</ul>
								</li>

								<li><a href="#!">Services</a>
								<ul class="">
									<li><a href="<?php get_site_url(); ?> meal-plans/">Meal Plans</a></li>
									<li><a href="<?php get_site_url(); ?> group-workshops/">Group WorkShops</a></li>
									<li><a href="<?php get_site_url(); ?> personalized-nutrition/">Personalized nutrition</a></li>
									<li><a href="<?php get_site_url(); ?> weight-loss-programs/">Weight Management Programs</a></li>
									<li><a href="<?php get_site_url(); ?> fitness-performance/">Fitness Performance</a></li>
                            	</ul>
							
								</li>
									
								<li><a href="#!">News & Updates</a>
									<ul>
										<li><a href="<?php get_site_url(); ?> blog/">Blog</a></li>
										<li><a href="<?php get_site_url(); ?> seminar-schedule/">Seminar Schedule</a></li>
										<li><a href="<?php get_site_url(); ?> video/">Videos & Gallery</a></li>
										<li><a href="<?php get_site_url(); ?> faq/">FAQ</a></li>
									</ul>
								</li>

								<li><a href="#!">Resources</a>
									<ul>
										<li><a href="<?php get_site_url(); ?> bmi-calculator/">BMI Calculator</a></li>
										<li><a href="<?php get_site_url(); ?> recipes/">Recipes</a></li>
										<li><a href="<?php get_site_url(); ?> downloads/">Downloads</a></li>
									</ul>
								</li>

							</ul>
							<!-- end menu area -->

							<!-- start attribute navigation -->
							<div class="attr-nav align-items-lg-center">
								<ul>
									<li class="d-none d-xl-inline-block"><a href="<?php get_site_url(); ?> contact/" class="butn-style01 text-white sm"><span>Consult Now</span></a></li>
								</ul>
							</div>
							<!-- end attribute navigation -->

						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

</header>