<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="#content" class="screen-reader-text">Skip to content</a>

	<header class="site-header">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		<div id="hamburger-main" class="hamburger">
			<a href="#primary-nav" class="screen-reader-text menu-button">Menu</a>
			<div class="hamburger-icon">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
		</div>

		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_id' => 'primary-nav-menu',
			'menu_class' => 'primary-menu',
			'container' => 'nav',
			'container_id' => 'primary-nav',
			'container_class' => 'primary-nav'
		) ); ?>
	</header>

<!-- Anchor for skip to content link -->
<a id="content"></a>
