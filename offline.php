<?php

/**
* Template name: Offine Page
*/

    get_header(); ?>
        <div class="container">
            <?php
                while ( have_posts() ) :
                the_post(); ?>
                    <?php the_content();?>
                <?php
                endwhile; // End of the loop.
            ?>
        </div>
    <?php get_footer();