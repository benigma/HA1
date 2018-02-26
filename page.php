<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="default-content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>