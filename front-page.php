<?php get_header(); ?>

		<?php echo the_field('header_introduction'); ?>
</header>

<div class="story-intro">
	<?php echo the_field('ha1_introduction'); ?>
</div>

<div class="story-container">
	
	<?php if( have_rows('service_sections') ): ?>
 		<?php while( have_rows('service_sections') ): the_row(); ?>
			<div class="story">
				<div class="feature"><img src="<?php the_sub_field('service_image'); ?>" /></div>
				<article>
					<?php the_sub_field('service_copy'); ?>
				</article>
			</div>
	<?php endwhile; endif; ?>
	
</div>


<?php get_footer(); ?>