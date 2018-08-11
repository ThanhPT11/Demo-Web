<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 
?>

<div style="" class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>


	<header  class="page-header">
		<h1> <?php echo $post->ID; ?> </h1>
		<h2 class="page-title"> <?php echo $post->post_title; ?></h2>
		<p> <?php echo $post->post_date; ?></p>
		<p> <?php echo $post->post_content ?></p>
		<p> <?php echo $post->guid ?></p>

	</header>

	<?php endif; ?>
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<pre>
	<?php print_r($posts); ?>
	<?php echo 'Tieu De  ' .$post->post_name; ?>
</pre

<?php get_footer();


