<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Saros
 */

	$socials = array(
		'angelco' => get_option('angelco'),
		'github' => get_option('github'),
		'dribbble' => get_option('dribbble'),
		'linkedin' => get_option('linkedin'),
		'twitter' => get_option('twitter'),
		'instagram' => get_option('instagram'),
		'facebook' => get_option('facebook'),
		'vimeo' => get_option('vimeo'),
		'youtube' => get_option('youtube')
	);
?>
	</main>
	<div class="saros-footer_spacer">&nbsp;</div>
    <footer class="saros-footer">
		<div class="container">
			<?php
				if(!empty($socials)) :
					echo '<span class="text-muted dark">Contact</span>';
				endif;
			?>
			
			<a class="email" href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a>,
			<a class="phone" href="tel:<?php echo get_option('phone'); ?>"><?php echo get_option('phone'); ?></a>
			<div class="saros-social">
				<?php foreach( $socials as $key => $social) {
						if(!empty($social)) : ?>
							<a class="saros-icon icon-<?php echo $key; ?>" href="<?php echo $social; ?>" target="_blank"><?php echo $key; ?></a>
						<?php endif;
					} 
				?>
			</div>
			<div class="saros-info" role="contentinfo">
				<?php
				if ( get_theme_mod( 'saros_footer_copyright', false ) ) {
					echo wp_kses_post( get_theme_mod( 'saros_footer_copyright', '' ) );
				} else {
					echo '&copy; ' . wp_kses_post( get_bloginfo('name') ) . ' &ndash; ';
				}
				printf ('Proudly powered by <a href='.esc_url( __( 'https://wordpress.org/', 'saros' ) ).' rel="nofollow">'.esc_html__( '%s', 'saros' ).'</a>', 'Wordpress');
				printf (', Theme By: <a href='.esc_url( __( 'https://sarozpoddar.com.np/', 'saros' ) ).' rel="nofollow">'.esc_html__( '%1$s', 'saros' ).'</a>', 'Saros'); ?>
				

				<?php wp_nav_menu( array(
					'theme_location' => 'footer',
					'container'      => '',
					'menu_class'     => 'navbar-footer',
					'depth'          => - 1,
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) ); ?>



			</div><!-- .site-info -->
		</div>
		
		

    </footer>
	<?php wp_footer(); ?>
</div><!-- #page -->
</body>
</html>
