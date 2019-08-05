<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Saros
 */

	get_header(); ?>

<?php
	$image = get_the_post_thumbnail_url( $post_id,  'full', array('class'=> 'hello'));
	if($image) :
		echo '<div class="post-header" style="background-image: url('. $image .');"></div>';
	endif;
?>

	<div class="post-single">
		<div class="container">
			<div class="columns">
				<div class="column-8">
					<?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'single' );
					endwhile; ?>
				</div>
				<div class="column-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer();
