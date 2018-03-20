<?php
/*
Template Name: Marketing Template
*/
?>
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="story-intro">
    <?php echo the_field('marketing_introduction'); ?>
</div>

<div class="story-container marketing">

	<?php if( have_rows('marketing_sections') ): ?>
         <?php while( have_rows('marketing_sections') ): the_row();
         $image = get_sub_field('marketing_section_image'); ?>

        <div class="story">
            <div class="feature">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <article>
                <?php the_sub_field('marketing_section_copy'); ?>
            </article>
        </div>
        
	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>