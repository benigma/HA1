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

<div class="bid-objectives">
    <?php if( have_rows('operations_objectives') ): ?>
    <?php while( have_rows('operations_objectives') ): the_row(); ?>

        <div class="objective">
            <?php the_sub_field('objective_copy'); ?>
        </div>
        
	<?php endwhile; endif; ?>
</div>

<div class="story-container operations">
    <?php if( have_rows('operation_items') ): ?>
     <?php while( have_rows('operation_items') ): the_row();
     $image = get_sub_field('operation_image'); ?>
        <div class="story">
            <div class="feature"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
            <article>
                <?php the_sub_field('operation_copy'); ?>
            </article>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>