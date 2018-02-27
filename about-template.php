<?php
/*
Template Name: About Template
*/
?>
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="story-intro">
    <?php echo the_field('about_introduction'); ?>
</div>

<div class="team">
    <div class="staff-profiles">
        <div class="staff-intro">
            <?php echo the_field('the_team_introduction'); ?>
		</div>
		<?php if( have_rows('the_team') ): ?>
			 <?php while( have_rows('the_team') ): the_row(); 
			 $image = get_sub_field('staff_image'); ?>
				<div class="staff">
					<div class="profile"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
					<div class="role">
						<?php the_sub_field('staff_copy'); ?>
					</div>
				</div>
		<?php endwhile; endif; ?>

	</div>
</div>

<div class="story-container about">
    
	<?php if( have_rows('about_sections') ): ?>
		<?php while( have_rows('about_sections') ): the_row(); ?>    

			<div class="story">
				<article>
					<?php the_sub_field('about_section_information'); ?>
				</article>
			</div>
		
	<?php endwhile; endif; ?>

</div>

<div class="bid-map">
    <div class="map-overlay" onClick="style.pointerEvents='none'"></div>
    <iframe width='100%' height='100%' frameBorder='0' src='https://a.tiles.mapbox.com/v4/benigma.oba9e1dp/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiYmVuaWdtYSIsImEiOiJlZjg4YmJiNmMyYTlkMjQ0MzlmYTA1YjYwYTRmN2NiYiJ9.nz1A1vJJVSXY5GgKNqQrTw'></iframe>

    </div>

<?php get_footer(); ?>