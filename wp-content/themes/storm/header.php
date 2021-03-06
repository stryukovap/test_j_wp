<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <title><?php bloginfo( 'name' );
		echo " | ";
		bloginfo( 'description' ) ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<header class="header">
    <div class="header__wrapper-top">
        <div class="container">
            <div class="header__top">
                <a href="#" class="header__top-link">Find Your Local Storm Guard!</a>
                <nav id="top-site-navigation" class="header__top-navigation"
                     aria-label="Top Navigation">
					<?php
					wp_nav_menu( [
						'theme_location' => 'top',
						'container'      => '',
						'items_wrap'     => '<ul class="header__top-menu-list">%3$s</ul>'
					] );
					?>
                </nav>
            </div>
        </div>
    </div>
    <div class="header__menu-wrapper">
        <div class="container">
            <div class="header__menu-inner">
                <div class="header__menu-logo">
					<?php the_custom_logo() ?>
                </div>
                <nav id="site-navigation" class="header__main-navigation"
                     aria-label="Main Navigation">
					<?php
					wp_nav_menu( [
						'theme_location' => 'header',
						'container'      => '',
						'items_wrap'     => '<ul class="header__menu-list">%3$s</ul>'
					] );
					?>
                </nav>
                <nav id="mobile-site-navigation" class="header__mobile-navigation"
                     aria-label="Mobile Navigation">
					<?php
					wp_nav_menu( [
						'theme_location' => 'mobile',
						'container'      => '',
						'items_wrap'     => '<ul class="header__menu-mobile row align-items-center justify-content-end">%3$s</ul>'
					] );
					?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/bars-solid.svg' ?>" width="30"
                         alt="menu" class="header__menu-mobile-img">
                </nav>
            </div>
        </div>
    </div>
</header>
<main id="main" class="site-main">