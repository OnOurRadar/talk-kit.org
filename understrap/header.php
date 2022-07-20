<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/jel7bbf.css">
	<script src="https://code.responsivevoice.org/responsivevoice.js?key=0Sk5egxb"></script>
	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open'); ?>

	<div class="site" id="page">
		<!-- ******************* The Navbar Area ******************* -->

		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

			<div class="container-fluid text-center text-dark">
				<a class="text-dark lead font-weight-bold skip-link sr-only sr-only-focusable my-4" href="#info"><?php esc_html_e('Skip to Introduction', 'understrap'); ?></a>
				<a class="text-dark lead font-weight-bold skip-link sr-only sr-only-focusable my-4" href="#video"><?php esc_html_e('Skip to Video Course', 'understrap'); ?></a>
				<a class="text-dark lead font-weight-bold skip-link sr-only sr-only-focusable my-4" href="#guides"><?php esc_html_e('Skip to Guides', 'understrap'); ?></a>
				<a class="text-dark lead font-weight-bold skip-link sr-only sr-only-focusable my-4 " href="#stories"><?php esc_html_e('Skip to Case Studies', 'understrap'); ?></a>

			</div>
			<div class="bg-blue lead font-weight-normal">
				<nav class="navbar container navbar-expand-lg navbar-light pt-sm-5">


					<button class="navbar-toggler mx-auto text-dark border-0" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>"><span class="text-dark"><i class="fas fa-bars fa-1x text-dark"></i></span></button>


					</button>


					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse text-center mx-auto',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
					<?php if ('container' == $container) : ?>


			</div><!-- .container -->
		<?php endif; ?>


		</nav><!-- .site-navigation -->


		</div><!-- #wrapper-navbar end -->
	</div>