<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="default-content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<style>
	@media only screen and (min-device-width : 375px) and (max-device-width : 667px), (min-width : 335px) and (max-width : 867px) {
		#gallery-1 .gallery-item {
			width: 50%;
		}
	}
</style>

<?php get_footer(); ?>