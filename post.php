<?php get_header(); ?>

    <h1><?php the_title(); ?></h1>
</header>

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

<div class="other-stories">
    <div class="sub-stories">
    <?php
		$currentID = get_the_ID();
		$my_query = new WP_Query( array('cat' => '4', 'showposts' => '3', 'post__not_in' => array($currentID)));
		while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class="sub-story">
        <?php the_post_thumbnail( 'medium' ); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="date"><?php the_date('d F Y'); ?></p>
                <?php the_excerpt(); ?>
            </article>
        </div>
    <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>