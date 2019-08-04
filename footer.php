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

?>

	</main>
	<div class="saros-footer_spacer">&nbsp;</div>
    <footer class="saros-footer">
		<div class="container">
			<span class="text-muted dark">Contact</span>
			<a class="email" href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a>,
			<a class="phone" href="tel:<?php echo get_option('phone'); ?>"><?php echo get_option('phone'); ?></a>
			<div class="saros-social">
				<?php 
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
					foreach( $socials as $key => $social) {
						if(!empty($social)) { ?>
							<a class="saros-icon icon-<?php echo $key; ?>" href="<?php echo $social; ?>" target="_blank"><?php echo $key; ?></a>
						<?php }
					} 
				?>
			</div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</div><!-- #page -->
</body>
</html>