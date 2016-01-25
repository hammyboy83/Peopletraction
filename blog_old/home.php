<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<?php
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?>
	<div>
		<?php the_date(); ?>
		<br />
		<?php the_title(); ?>
		<?php the_excerpt(); ?>
	</div>
<?php
endforeach;
wp_reset_postdata();
?>
