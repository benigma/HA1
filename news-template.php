<?php
/*
Template Name: News Page Template
*/
?>
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="news-stories">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts('cat=4&posts_per_page=1&paged=' . $paged); ?>
    <div class="main-story">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="date"><?php the_date('d F Y'); ?></p>
                <?php the_excerpt(); ?>
            </article>
            <div class="story-image">
            <?php the_post_thumbnail( 'large' ); ?>
            </div>
        
            <?php endwhile; endif; ?>
        </div>

    <?php 
        $subPaged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('cat=4&posts_per_page=9&offset=1&paged=' . $subPaged); ?>
            <div class="sub-stories">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                <div class="sub-story">
                    <?php the_post_thumbnail( 'medium' ); ?>
                    <article>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="date"><?php the_date('d F Y'); ?></p>
                        <?php the_excerpt(); ?>
                    </article>
                </div>
                        
                <?php endwhile; endif; ?>
            </div>

            <?php if (function_exists("pagination")) {
                pagination($additional_loop->max_num_pages);
            } ?>

    <?php wp_reset_query(); ?>

</div>

<?php get_footer(); ?>