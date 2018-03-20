<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
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

<header <?php body_class(); ?>>

<nav>
	<div class="logo">
		<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Harrow-BID-White.svg" class="dt-logo" alt="Harrow BID"></a>
		<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/HA1.svg" class="mobile-logo" alt="Harrow BID"></a>
	</div>

	<div class="mobile-menu-icon"></div>

	<?php 
		$defaults = array(	
		'container' => false,
		'menu_id' => 'menu-primary-menu',
		'depth' => 1
		);
								
		wp_nav_menu( $defaults );
	?>
	<div id="mobile-primary-menu">
		<div class="close-btn"></div>
			<?php 
				$defaults = array(	
				'container' => false,
				'menu_id' => '',
				'menu_class' => 'mobile-menu-test',
				'depth' => 1
				);
									
				wp_nav_menu( $defaults );
			?>
	</div>
	</nav>