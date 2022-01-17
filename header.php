<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptest
 */

global $wptest_options;

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
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="container">
		<div class="header-wrapper">
			<div class="row header-row">
				<div class="logo">
					<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
							rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
			else :
				?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
							rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
			endif;
			$wptest_description = get_bloginfo( 'description', 'display' );
			if ( $wptest_description || is_customize_preview() ) :
				?>
					<p class="site-description">
						<?php echo $wptest_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
					<?php endif; ?>
				</div>
				<div class="nav-wrapper font">
					<nav class="main hide-on-mobile">
						<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
</nav>
	<div class="mobile-menu-wrapper">
			<div class="mobile-menu-btn">
				<span></span>
			</div>
		</div>
				<button class="outline-btn-green header-btn hide-on-mobile">I am button</button>
		</div><!-- .nav-wrapper -->
			</div>
		</div>
		<div class="mobile-menu nav-wrapper font">
		<nav id="site-navigation" class="main-navigation mobile-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		<button class="outline-btn-green header-btn">I am button</button>
		</div>
		</div>

	</header>