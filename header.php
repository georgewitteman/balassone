<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a href="#content" class="screen-reader-text">Skip to content</a>

	<div class="page-container">

	<header class="site-header">
		<div class="wrap">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text site-name"><?php bloginfo( 'name' ); ?></span><img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" class="site-logo"></a>
			</h1>

			<nav class="main-navigation">
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<a id="primary-menu-toggle" class="menu-toggle" href="#">Menu</a>

					<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id' => 'primary-menu'
					) ); ?>
				<?php endif; ?>
			</nav>
		</div>
	</header>
