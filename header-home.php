<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no">
	<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css">

	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/59b8cc31-61bf-417a-b9a1-86b84539182b.js"></script>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<div class="row">

	<div class="col-md-12">
		
		<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Harrow-BID-White.svg" alt="Harrow BID" class="BID-logo" /></a>
		
		<nav>
			<?php 
				$defaults = array(	
				'container' => false, 	
				'theme_location' => 'primary-menu'
				);
								
				wp_nav_menu( $defaults );
			 ?>
		</nav>
		
		<?php echo the_field('header_introduction'); ?>
		
		<?php if( have_rows('header_sections') ): ?>
			<?php while( have_rows('header_sections') ): the_row(); ?>
			
				<div class="intro-block">
					<a href="<?php the_sub_field('section_link'); ?>">
					<div class="icon"><img src="<?php the_sub_field('section_image'); ?>" /></div>
					<?php the_sub_field('section_copy'); ?>
					</a>
				</div>
				
			<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	
</div>
</header>