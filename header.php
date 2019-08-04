<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Saros
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="saros">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'saros' ); ?></a>
	<?php
		$saros_description = get_bloginfo( 'description', 'display' );
		$home_url = esc_url( home_url( '/' ) );
		if ( !is_front_page() && !is_home()) :
			$small = 'small';
		endif;
	?>

	<header class="saros-header <?php echo $small; ?>">
		<div class="navbar">
			<div class="container">
				<div class="columns">
					<a class="brand-name" href="<?php echo $home_url; ?>">&#47;&#47; <?php bloginfo( 'name' ); ?></a>
					<div class="column-10">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'menu_id'        => 'primary-menu',
							));
						?>
					</div>

				</div>

			</div>
		</div>
		<?php if ( is_front_page() || is_home()) : ?>
			<div class="container">
				<h3 class="section-title"><?php echo __('saroz', 'saros') ?></h3>
				<div class="saros-intro">
					<h1 class="saros-name">
						<span><?php echo $saros_description; ?></span>
					</h1>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="saros-summary"><?php the_content(); ?></div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
	</header>
	<main class="saros-main">