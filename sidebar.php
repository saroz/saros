<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Saros
 */

if ( ! is_active_sidebar( 'aside_right' ) ) {
	return;
}
?>

<aside class="saros-sidebar">
	<div class="aside">
		<?php dynamic_sidebar( 'aside_right' ); ?>
	</div>
</aside><!-- #secondary -->
