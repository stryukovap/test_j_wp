<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' );
		echo " | ";
		bloginfo( 'description' ) ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<header class="header">
    <div class="header__wrapper-top">
        <div class="container">
            <div class="header__top row align-items-center justify-content-between">
                <a href="#" class="header__top-link">Find Your Local Storm Guard!</a>
				<?php
				wp_nav_menu( [
					'theme_location' => 'top',
					'container'      => null,
					'items_wrap'     => '<ul class="header__top-menu-list row align-items-center justify-content-end">%3$s</ul>'
				] );
				?>
            </div>
        </div>
    </div>
    <div class="header__menu-wrapper" style="background-image: url('<?php header_image(); ?>');">
        <div class="header__menu-wrap">
            <div class="container">
                <div class="row align-items-center justify-content-between">
					<?php the_custom_logo() ?>
					<?php
					wp_nav_menu( [
						'theme_location' => 'header',
						'container'      => null,
						'items_wrap'     => '<ul class="header__menu-list row align-items-center justify-content-end">%3$s</ul>'
					] );
					?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__desc col-sm-12 col-md-6">
                <div class="header__desc-text">
					<?php the_field( 'main_title' ) ?>
                </div>
                <a href="<?php echo get_field( 'button_url' ) ?>"
                   class="header__desc-link"><?php echo get_field( 'button_text' ) ?> ></a>
            </div>
        </div>
    </div>
    <div class="header__form">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="header__form-wrapper">
                    <div class="header__form-title">Find A Franchise Near You</div>
                    <div class="header__form-desc">Want to speak to us in person? Enter your zip code to find the nearest franchise.</div>
                </div>
                <div class="header__form-search">
                    <form class="header__form-form" method="#" action="#">
                        <input id="zipCode" required name="zipCode" class="header__form-input" type="text" placeholder="Enter zip code">
                        <input class="header__form-submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
