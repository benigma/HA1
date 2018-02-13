<?php get_header('home'); ?>

<div class="row">

	<div class="col-md-12">
	
	<?php echo the_field('ha1_about_introduction'); ?>
	
	</div>

</div>

<section class="bid-numbers">
 <div class="row wow fadeIn" data-wow-duration="4s">
 	<div class="col-md-12">
 		<h2>Harrow BID by numbers</h2>
 		<ul class="bid-statistics">
 		
 			<?php if( have_rows('ha1_numbers') ): ?>
 				<?php while( have_rows('ha1_numbers') ): the_row(); ?>
 		
		 			<li>
		 				<img src="<?php the_sub_field('figure_image'); ?>" />
		 				<p class="statistic"><strong><?php the_sub_field('figure_number'); ?></strong></p>
		 				<p><?php the_sub_field('figure_copy'); ?></p>
		 			</li>
 			
 			<?php endwhile; endif; ?>
 			
 		</ul>
 	</div>
 </div>
</section>

<?php if( have_rows('additional_sections') ): ?>
	<?php while( have_rows('additional_sections') ): the_row(); ?>
		
		<div class="row wow fadeIn">
		
			<div class="col-md-4">
				<img src="<?php the_sub_field('additional_section_image'); ?>"/>
			</div>
			<div class="col-md-8">
					<?php the_sub_field('additional_section_copy'); ?>
			</div>
			
		</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>