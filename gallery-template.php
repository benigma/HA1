<?php
/*
Template Name: Gallery Template
*/
?>
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<?php 

$images = get_field('gallery_images');

if( $images ): ?>
    <div class="gallery-area">
        <?php foreach( $images as $image ): ?>
            <div>
                <a href="<?php echo get_attachment_link($image['id']); ?>">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>