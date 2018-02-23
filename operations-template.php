<?php
/*
Template Name: Operations Template
*/
?>
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="story-intro">
        <?php echo the_field('operations_intro'); ?>
</div>

<div class="story-container operations">
    <?php if( have_rows('operation_items') ): ?>
 	<?php while( have_rows('operation_items') ): the_row(); ?>
        <div class="story">
            <div class="feature"><img src="<?php the_sub_field('operation_image'); ?>" /></div>
            <article>
                <?php the_sub_field('operation_copy'); ?>
            </article>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>