<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fourjunctions
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
	<?php wp_body_open(); ?>
	<div id="home-page" class="home-page">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'four_junctions' ); ?></a>
		<div class="grid grid-cols-1 lg:grid-cols-11 container lg:max-w-full mx-auto px-4 lg:px-14 gap-6 grid-home">
			<header id="header-home" class="col-span-1 lg:col-span-2 header-home pt-6 lg:pt-10 viewport-height">
				<div class="flex flex-row lg:flex-col gap-4 lg:gap-8 justify-between lg:justify-start items-center lg:items-start">
					<div class="logo">
						<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif; ?>
					</div><!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation w-max">
						<button class="menu-toggle flex border-none" aria-controls="primary-menu" aria-expanded="false">
							<img class="menu-open" src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/menu-toggle.svg" alt="menu-toggle" />
							<img class="menu-close" src="<?php echo bloginfo('template_directory'); ?>/assets/images/svg/menu-close.svg" alt="menu-close" />
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'    => 'menu nav-menu flex flex-col gap-4 pt-20 pb-6 px-4 lg:px-14',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->
