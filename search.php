<?php get_header(); ?>


<!-- opens content div -->
<div id="content">
<h2 class="archive-title">You searched for: <?php the_search_query(); ?></h2>
<div class="navigation">
<?php posts_nav_link(); ?>
</div>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<!-- opens post div -->
<div id="post-<?php the_id(); ?>" <?php post_class(); ?>>
<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<h3 class="postdata"><?php _e('by', 'blue-green-blast'); ?> <?php the_author(); ?>, <?php _e('dated', 'blue-green-blast'); ?>: <?php the_time('n/j/y'); ?>, <?php the_time('g:i a'); ?></h3>

<!-- opens entry div -->
<div class="entry">
<?php the_content(); ?>
</div>
<!-- closes entry div -->

</div>
<!-- closes post div -->

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'blue-green-blast'); ?></p>
<?php endif; ?>
</div>
<!-- closes content div -->


<?php get_sidebar(); ?>


<?php get_footer(); ?>
