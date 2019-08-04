<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saros
 */

?>
    <div class="post post-<?php the_ID(); ?>">
        <h2 class="post-title">
            <?php the_title( '<span >', '</span>' ); ?>
        </h2>
        <div class="metas border-bottom">
            <span class="meta-date"><?php the_time( 'F j, Y' ); ?></span>
            <?php
                $cat = get_the_category( $post->ID );
                $cat_name = $cat[0]->name;
                $cat_slug = $cat[0]->slug;
                echo '<a class="meta-category" href="'. $cat_slug .'">'.$cat_name.'</a>'
            ?>
            <?php if ( get_edit_post_link() ) : ?>
                <?php edit_post_link('<span class="meta_edit">edit</span>'); ?>
            <?php endif; ?>
        </div>
        <div class="post-summary"><?php the_content(); ?></div>
    </div>
        


