<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
$post_image_id = get_post_thumbnail_id($post_to_use->ID);
		if ($post_image_id) {
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		}
		?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="post-details">
			<?php the_author(); ?><span>,</span>
			<?php the_time('jS F Y') ?>
	</div>
	<div class="post-main">
	<div class="post-thumb" style="background: url('<?php echo $thumbnail; ?>');background-size:cover;height: 30%;background-attachment:fixed;">
	</div>
	<div class="entry-content">
		  <?php the_content() ?>
	</div><!-- .entry-content -->
	<div class="side-bar">
			<?php get_sidebar()?>
	</div>
	</div>
</article><!-- #post-## -->
