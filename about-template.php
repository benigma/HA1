<?php
/*
Template Name: About Template
*/
?>
<?php get_header(); ?>

<div class="row">
	<div class="col-md-12">
		<?php echo the_field('about_introduction'); ?>
	</div>
</div>

<section class="grey">
<div class="row">
	<div class="col-md-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
		<a name="the-team"></a>
		
		<?php echo the_field('the_team_introduction'); ?>
		
		<ul class="the-team">
		<?php if( have_rows('the_team') ): ?>
			<?php while( have_rows('the_team') ): the_row(); ?>
			<li>
				<img src="<?php the_sub_field('staff_image'); ?>" />
				<?php the_sub_field('staff_copy'); ?>
			</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
</div>
</section>

<?php if( have_rows('additional_about_sections') ): ?>
	<?php while( have_rows('additional_about_sections') ): the_row(); ?>
	
		<?php if (get_sub_field('additional_about_section_layout') == 'one') { ?>
		
			<div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
				<div class="col-md-12">
					<a name="<?php the_sub_field('additional_about_section_anchor'); ?>"></a>
					<?php echo the_sub_field('two_columns_introduction'); ?>
				</div>
				<div class="col-md-6"><?php echo the_sub_field('two_columns_column_1'); ?></div>
				<div class="col-md-6"><?php echo the_sub_field('two_columns_column_2'); ?></div>
			</div>
		
		<?php } elseif (get_sub_field('additional_about_section_layout') == 'two') { ?>
		
			<div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
				<a name="<?php the_sub_field('additional_about_section_anchor'); ?>"></a>
				<div class="col-md-6"><img src="<?php echo the_sub_field('additional_about_section_image'); ?>" /></div>
				<div class="col-md-6"><?php echo the_sub_field('additional_about_section_copy'); ?></div>
			</div>
		
	<?php } else { } ?> 
	
<?php endwhile; endif; ?>

<?php get_footer(); ?>