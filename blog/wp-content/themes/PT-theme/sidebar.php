<div id="sidebar">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h1>
          <a href="<?php echo the_permalink(); ?>" class="post-title"><?php echo the_title(); ?></a>
  </h1>

<?php endwhile; else: ?>
<?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
