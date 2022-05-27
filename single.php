<?php get_header(); ?>


<!-- opens content div -->
<div id="content">
<div class="navigation">
<?php previous_post_link(); ?> | <?php next_post_link(); ?>
</div>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<!-- opens post div -->
<div id="post-<?php the_id(); ?>" <?php post_class(); ?>>
<h2 class="entry-title"><?php the_title(); ?></h2>
<h3 class="postdata"><?php _e('by', 'blue-green-blast'); ?> <?php the_author(); ?>, <?php _e('dated', 'blue-green-blast'); ?>: <?php the_time('n/j/y'); ?>, <?php the_time('g:i a'); ?></h3>

<!-- opens entry div -->
<div class="entry">
<?php the_content(); ?>
<?php the_tags( '<p><strong>' . __('Tagged:', 'blue-green-blast') . '</strong> ',', ', '</p>' ); ?>
<?php wp_link_pages(); ?>
</div>
<!-- closes entry div -->
</div>
<!-- closes post div -->

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'blue-green-blast'); ?></p>
<?php endif; ?>

<!-- add comments and reply form to the page -->
<?php comments_template(); ?>
</div>
<!-- closes content div -->


<?php get_sidebar(); ?>


<?php get_footer(); ?>
