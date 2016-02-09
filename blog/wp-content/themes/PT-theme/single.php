<?php get_header(); ?>


<div id="primary" class="single-content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) :
		while ( have_posts()) : the_post();
		get_template_part( 'template-parts/content', 'single' );
		endwhile;
		endif;
		?>


	</main><!-- .site-main -->
	<div class="side-bar">
			<?php get_sidebar()?>
	</div>


</div><!-- .content-area -->
<?php get_footer(); ?>
