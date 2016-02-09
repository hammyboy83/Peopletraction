<header class="entry-header"><h1>Recent Posts</h1></header>
<?php query_posts('showposts=5'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <hr>
<div class="side-item">
  <h1>
        <a href="<?php echo the_permalink(); ?>" class="post-title"><?php echo the_title(); ?></a>
  </h1>
  <div class="the-item-excerpt">
    <?php echo the_excerpt(); ?>
  </div>
  <hr>
</div>
<?php endwhile; endif; ?>
