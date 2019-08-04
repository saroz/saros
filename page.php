<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saros
 */

get_header();
?>

	<div class="container">
		<div class="columns">
			<div class="column-8">
				<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; ?>
			</div>
			<div class="column-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer();
