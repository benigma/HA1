<?php
/*
Template Name: Crime Template
*/
?>
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="story-intro">
        <?php echo the_field('business_crime_introduction'); ?>
</div>

<?php if( have_rows('partnership') ): ?>
 	<?php while( have_rows('partnership') ): the_row(); ?>
		<div class="partnership">
			<div class="partnership-brand">
				<img src="<?php echo the_sub_field('partnership_image'); ?>" />
			</div>
			<div class="partnership-info">
					<?php the_sub_field('partnership_copy'); ?>
			</div>
		</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>