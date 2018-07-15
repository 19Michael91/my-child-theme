<?php
/**
 * Template Name: Single Film
 *
 * Template post type: film
 */

get_header();?>

	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">
			<?php
			$post = get_post( get_the_ID() );
			echo $post->post_title . '<br/>';
			echo $post->post_content . '<br/>';
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
