<?php get_header(); ?>
<?php echo the_field('page_header_introduction', $post->post_parent); ?>
</header>

<div class="attachment">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php echo wp_get_attachment_image($attachment_id, $size='full', $icon=false); ?>
				
	<?php endwhile; endif; ?>
	<div class="nav-links">
		<?php previous_image_link( false, '<div class="previous-image">' . __( '<', '$text_domain' ) . '</div>' ); ?>
		<?php $permalink = get_permalink($post->post_parent); ?>
		<div class="return"><a href="<?php echo $permalink; ?>">RETURN TO GALLERY</a></div>

		<?php next_image_link( false, '<div class="next-image">' . __( '>', '$text_domain' ) . '</div>' ); ?>
	</div>
</div>

<?php get_footer(); ?>