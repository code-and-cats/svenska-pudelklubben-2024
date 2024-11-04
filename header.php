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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'spk24' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-logo">
		<a href="<?php echo site_url(); ?>">
		<img class="logo-top" src="<?php echo get_theme_file_uri('/img/textlogo.png') ?>;" alt="logo" /></a>
</div>

		<nav id="site-navigation" class="main-navigation">
						<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
