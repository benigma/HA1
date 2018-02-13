<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header('contact'); ?>

<section class="grey">
	<div class="row contact-info">
		<div class="col-md-6">
			<?php echo the_field('contact_sidebar'); ?>
		</div>
		
		<div class="col-md-6">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<?php the_content(); ?>
			
			<?php endwhile; else: ?>
				
			<?php endif; ?>
		
		</div>
		
	</div>
</section>

<section class="wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
	<div class="map-overlay" onClick="style.pointerEvents='none'"></div>
	<iframe width='100%' height='600px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/benigma.oba9e1dp/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiYmVuaWdtYSIsImEiOiJlZjg4YmJiNmMyYTlkMjQ0MzlmYTA1YjYwYTRmN2NiYiJ9.nz1A1vJJVSXY5GgKNqQrTw'></iframe>
</section>

<?php get_footer(); ?>