<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saros
 */

    get_header(); ?>      
        <div class="container">
            <h3 class="section-title mt-4"><?php single_cat_title(); ?></h3>
            <div class="columns">
                <div class="column-8">
                    <div class="articles item-2">
                        <?php
                            if ( have_posts() ) : ?>
                                <?php
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/content', 'category' );
                                    endwhile;
                                    the_posts_navigation();
                            else :
                                echo '<div class="alert alert-info"><span>You haven&apos;t added any yet!!</span></div>';
                            endif;
                        ?>
                    </div>
                </div>
                <div class="column-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
    	</div>
    <?php get_footer();
