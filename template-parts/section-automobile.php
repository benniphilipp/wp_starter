<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<?php if(has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url() ?>">
<?php endif; ?>

<?php the_content(); ?>

<?php endwhile; else: endif;?>