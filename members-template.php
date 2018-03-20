<?php
/*
Template Name: Members Area Template
*/
?>

<?php if ( is_user_logged_in() ) { } else { wp_redirect( 'http://harrow.dvisioncreate.co.uk/wp-login.php' ); exit; } ?> 
<?php get_header(); ?>

<?php echo the_field('page_header_introduction'); ?>
</header>

<div class="membership-area">

    <div class="member-info">
        <?php the_field('members_introduction'); ?>
    </div>

    <div class="member-documents">
        <?php if( have_rows('members_area_section') ): ?>
         <?php while( have_rows('members_area_section') ): the_row(); ?>
            <?php the_sub_field('member_section'); ?>
         <?php endwhile; endif; ?>
    </div>

</div>

<?php get_footer(); ?>