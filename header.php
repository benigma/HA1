<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no">
	<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
    <script type="text/javascript" src="http://fast.fonts.net/jsapi/59b8cc31-61bf-417a-b9a1-86b84539182b.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>
<body class="home-container">

<header class="home">

<nav>
	<div class="logo">
		<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Harrow-BID-White.svg" class="dt-logo" alt="Harrow BID"></a>
		<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/HA1.svg" class="mobile-logo" alt="Harrow BID"></a>
	</div>

	<div class="mobile-menu-icon"></div>

		<ul id="menu-primary-menu">
			<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-50"><a href="about.html">About Us</a>
			</li>
			<li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58"><a href="marketing.html">Marketing</a>
			</li>
			<li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a href="crime.html">Crime Partnership</a></li>
			<li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="operations.html">Operations &amp; Services</a></li>
			<li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="news.html">News</a></li>
			<li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="contact.html">Contact</a></li>
		</ul>

		<ul id="mobile-primary-menu" class="mobile-menu">
			<div class="close-btn"></div>
			<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-50"><a href="about.html">About Us</a>
			</li>
			<li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58"><a href="marketing.html">Marketing</a>
			</li>
			<li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a href="crime.html">Crime Partnership</a></li>
			<li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="operations.html">Operations &amp; Services</a></li>
			<li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="news.html">News</a></li>
			<li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="contact.html">Contact</a></li>
		</ul>
		
	</nav>