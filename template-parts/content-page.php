<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saros
 */

?>

	<div class="post-page post-<?php the_ID(); ?>">
		<?php saros_post_thumbnail(); ?>
        <h2 class="post-title">
            <?php the_title( '<span >', '</span>' ); ?>
        </h2>
        <div class="metas border-bottom">
            <?php if ( get_edit_post_link() ) : ?>
                <?php edit_post_link('<span class="meta_edit">edit</span>'); ?>
            <?php endif; ?>
        </div>
        <div class="post-summary"><?php the_content(); ?></div>
    </div>