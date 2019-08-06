<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Saros
 */

get_header();
?>

	<div class="container error-404 not-found">
		<div class="columns">
			<div class="column-8">
				<h3 class="section-title mt-4">404</h3>
				<h4 class="post-title">
					<span><?php esc_html_e( 'Oops! This page can&rsquo;t be found.', 'saros' ); ?></span>
				</h4>
				<div class="post-summary">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'saros' ); ?></p>
				</div>
				<a class="btn" href="<?php esc_url( home_url( '/' ) ); ?>">Return to Home Page</a>
				<div class="mt-4"></div>
			</div>
		</div>
	</div>

	<?php get_footer();
