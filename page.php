<?php get_header(); ?>

<div class="row">
	<div class="col-md-12">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>
		
		<?php endwhile; else: ?>
			
		<?php endif; ?>
		
	</div>
</div>

<?php
	$thispage=$post->ID;
	$childpages = query_posts('post_per_page=-1&orderby=menu_order&order=asc&post_type=page&post_parent='.$thispage);
 	if($childpages){ /* display the children content */
 	foreach ($childpages as $post) :
 	setup_postdata($post); ?>
 	<div class="row">
 		<div class="col-md-12">
 			<h2><?php the_title(); ?></h2>
	 		<?php the_content();?>
	 	</div>
	 </div>
 <?php
 	endforeach;
 } ?>

<?php get_footer(); ?>