<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saros
 */

?>

    
    <article class="article article-<?php the_ID(); ?>">
        <a class="link-to-detail" href="<?php the_permalink(); ?>" rel="bookmark">&nbsp;</a>
        <?php saros_post_thumbnail(); ?>
        <?php the_title( '<h4 class="article-title">', '</h4>' ); ?>
        <div class="article-content">
            <?php the_excerpt(); ?>
        </div>
        <div class="metas">
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
            <!-- <span class="read-more">&nbsp;</span> -->
        </div>
    </article>
        


