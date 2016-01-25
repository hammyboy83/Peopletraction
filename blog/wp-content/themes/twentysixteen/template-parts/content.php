
<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<div class="home-post">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<!-- .entry-header -->
	<?php the_author(); ?><span>,</span>
	<?php the_time('jS F Y') ?><br />
	<?php twentysixteen_post_thumbnail(); ?>
	<?php twentysixteen_excerpt(); ?>
		<a href="%s" rel="bookmark">Read article...</a>
</div>
