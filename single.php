<?php get_header(); ?>

    <h1><?php the_title(); ?></h1>
</header>

<div class="story-intro">
        <?php echo the_field('business_crime_introduction'); ?>
</div>

<div class="news-story">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="press-shot">
            <?php the_post_thumbnail( 'large' ); ?>
            <figcaption><?php echo get_post(get_post_thumbnail_id())->post_content; ?></figcaption>
        </div>
        <article><?php the_content(); ?></article>
    <?php endwhile; else: ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>