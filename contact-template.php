<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="contact-options">

	<div class="address">
		<?php echo the_field('contact_sidebar'); ?>
	</div>

	<div class="contact-form">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		
	<?php endwhile; else: ?>
	<?php endif; ?>
	</div>

</div>

<div class="bid-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4958.624374841176!2d-0.3352314366033429!3d51.580841528099086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761375d188d5c7%3A0xbc3654e77055ad2d!2sHarrow+Business+Improvement+District!5e0!3m2!1sen!2suk!4v1519301251710" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php get_footer(); ?>