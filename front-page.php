<?php
/**
 * Template name: Home Page
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Saros
 */

	get_header(); ?>
		<div class="container">
			<div class="articles">
				<?php
					$args = array(
						'post_type' => 'post',
						'paged' => 1,
					);
					$my_posts = new WP_Query( $args );
					$max_page = $my_posts->max_num_pages;
					if ( $my_posts->have_posts() ) : 
						while ( $my_posts->have_posts() ) : $my_posts->the_post();
								get_template_part( 'template-parts/content', 'blog' );
						endwhile;
					else :
						echo '<div class="alert alert-info"><span>You haven&apos;t added any yet!!</span></div>';
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
	<?php get_footer();