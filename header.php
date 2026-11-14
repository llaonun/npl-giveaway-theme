<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="container header-inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) { the_custom_logo(); } ?>
			<div class="site-title-wrap">
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<span class="site-tagline"><?php bloginfo( 'description' ); ?></span>
			</div>
		</div>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'npl-giveaway' ); ?></button>
		<nav class="main-navigation" id="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'npl-giveaway' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'fallback_cb'    => false,
			) );
			?>
		</nav>
		<a class="btn btn-gold header-cta" href="<?php echo esc_url( home_url( '/sign-up/' ) ); ?>"><?php esc_html_e( 'Join & Predict', 'npl-giveaway' ); ?></a>
	</div>
</header>
<main class="site-main">
