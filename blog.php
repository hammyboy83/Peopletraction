<?php include 'php-fn/head.php' ; ?>
<style type="text/css">
<?php include 'php-fn/eucookie-cdd.php' ; ?>
</style>
<?php include 'php-fn/eucookie-fn.php' ; ?>

<?php
/*
Template Name: Latest
*/
?>

<? readfile ("http://blog.peopletraction.co.uk/");?>

<?php
global $post;
$myposts = get_posts('numberposts=4&category=8');
foreach($myposts as $post) :
setup_postdata($post);
?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endforeach; ?>

<?php include 'php-fn/footer.php' ; ?>
</body>

<?php include 'php-fn/ga.php' ; ?>


</html>
