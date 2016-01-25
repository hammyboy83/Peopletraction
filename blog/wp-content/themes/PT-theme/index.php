<?php get_header(); ?>
<section class="flex-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="home-post">
<div class="post-head">
<h1>
        <a href="<?php echo the_permalink(); ?>" class="post-title"><?php echo the_title(); ?></a>
</h1>


<h4>Posted on <?php the_time('F jS, Y') ?></h4>
</div>
<div class="postcontent">
<?php if( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
<?php the_excerpt();?>
</div>
<hr></div> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</section>
<?php get_footer(); ?>
