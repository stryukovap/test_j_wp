<?php get_header(); ?>
<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="services block">
            <div class="container">
                <h2 class="services__title block__title">
					<?php echo get_field( 'block2_title' ) ?>
                </h2>
                <div class="services__desc block__desc">
					<?php echo get_field( 'block2_description' ) ?>
                </div>
                <ul class="services__list row">
					<?php
					$args  = array(
						'numberposts'      => 0,
						'order'            => 'ASC',
						'post_type'        => 'services',
						'suppress_filters' => 'true'
					);
					$posts = get_posts( $args );
					foreach ( $posts as $post ) {
						setup_postdata( $post );
						?>
                        <li class="services__item item col-sm-12 col-md-4">
                            <a href="<?= the_permalink() ?>" class="item__link">
                                <div class="item__wrapper">
                                    <div class="item__circle"></div>
                                    <img src="<?php echo get_field( 'service_icon' ) ?>"
                                         alt="<?= the_title() ?>" class="item__icon">
                                </div>
                                <h4 class="item__title"><?= the_title() ?></h4>
                            </a>
                            <div class="item__desc">
								<?php the_content(); ?>
                            </div>
                        </li>
						<?php
					}
					wp_reset_postdata(); ?>
                </ul>
                <a href="#" class="services__link">View All Services</a>
            </div>
        </section>
        <section class="started block">
            <div class="container">
                <h2 class="started__title block__title">
					<?php echo get_field( 'block3_title' ) ?>
                </h2>
                <div class="started__desc block__desc">
					<?php echo get_field( 'block3_description' ) ?>
                </div>
                <ul class="started__list row">
					<?php
					$args  = array(
						'category_name'    => 'get-started',
						'numberposts'      => 0,
						'order'            => 'ASC',
						'post_type'        => 'post',
						'suppress_filters' => 'true'
					);
					$posts = get_posts( $args );
					foreach ( $posts as $post ) {
						setup_postdata( $post );
						?>
                        <li class="started__item col-sm-12 col-md-4">
                            <div class="started__item-wrapper">
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								}
								?>
                            </div>
                            <a href="<?php the_permalink() ?>" class="started__item-link">
                                <h4 class="started__item-title"><?php the_title() ?> ></h4>
                            </a>
                        </li>
						<?php
					}
					wp_reset_postdata(); ?>
                </ul>
            </div>
        </section>
        <section class="testimonials block">
            <div class="container">
                <h2 class="testimonials__title block__title">
                    See What Clients Have To Say
                </h2>
                <ul class="testimonials__slider slider" data-slick='{"slidesToShow": 1,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "autoplay":true,
                    "dots":true,
                    "accessibility":true}'>
					<?php
					$args  = array(
						'numberposts'      => 0,
						'order'            => 'ASC',
						'post_type'        => 'testimonials',
						'suppress_filters' => 'true'
					);
					$posts = get_posts( $args );
					foreach ( $posts as $post ) {
						setup_postdata( $post );
						?>
                        <li>
                            <div class="slider__testimonial">
								<?php the_content(); ?>
                            </div>
                            <div class="slider__author">
                                <div class="slider__author-title">
									<?php echo get_field( 'testimonial_author' ) ?>
                                </div>
                                <div class="slider__author-desc">
									<?php echo get_field( 'testimonial_author_description' ) ?>
                                </div>
                            </div>
                        </li>
						<?php
					}
					wp_reset_postdata(); ?>
                </ul>
            </div>
        </section>
        <section class="news block">
            <div class="container">
                <h2 class="started__title block__title">
					<?php echo get_field( 'block4_title' ) ?>
                </h2>
                <div class="started__desc block__desc">
					<?php echo get_field( 'block4_description' ) ?>
                </div>
                <ul class="news__list row">
					<?php
					$args  = array(
						'category_name'    => 'news',
						'numberposts'      => 3,
						'order'            => 'DESC',
						'post_type'        => 'post',
						'orderby'          => 'date',
						'suppress_filters' => 'true'
					);
					$posts = get_posts( $args );
					foreach ( $posts as $post ) {
						setup_postdata( $post );
						?>
                        <li class="news__item col-sm-12 col-md-4">
                            <div class="news__item-wrapper">
                                <div class="news__wrapper">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
									?>
                                    <div class="news__date">
                                        <span class="news__month">OCT</span>
                                        <span class="news__day">19</span>
                                    </div>
                                </div>
                                <div class="news__content">
                                    <h3 class="news__title"><?php the_title() ?></h3>
                                    <div class="news__text"><?php the_content(); ?>
                                        <a href="<?php the_permalink() ?>" class="news__more">Read More</a>
                                    </div>
                                </div>
                                <div class="news__author"><?php the_author() ?></div>
                            </div>
                        </li>
						<?php
					}
					wp_reset_postdata(); ?>
                    <li class="news__item col-sm-12 col-md-4">
                        <div class="news__item-wrapper">
                            <div class="news__wrapper">
                                <img style="display: block; width: 100%;"
                                     src="<?php echo get_template_directory_uri() . '/assets/img/news.png' ?>"
                                     alt="#" class="news__img">
                                <div class="news__date">
                                    <span class="news__month">OCT</span>
                                    <span class="news__day">19</span>
                                </div>
                            </div>
                            <div class="news__content">
                                <h3 class="news__title">How to Prep
                                    Your Home for Fall</h3>
                                <div class="news__text">
                                    Well, summer has long since passed and we’re officially in
                                    fall. It’s the perfect time to refresh your home and give
                                    it a good once over in advance of autumn winds and wintry
                                    weather. As the seasons change, so do the needs of our homes,
                                    as well as the activities we do in and around them. It’s a
                                    good time to perform any necessary or desired maintenance
                                    in order to keep your home running smoothly.
                                    <a href="#" class="news__more">Read More</a>
                                </div>
                            </div>
                            <div class="news__author">By Author</div>
                        </div>
                    </li>
                    <li class="news__item col-sm-12 col-md-4">
                        <div class="news__item-wrapper">
                            <div class="news__wrapper">
                                <img style="display: block; width: 100%;"
                                     src="<?php echo get_template_directory_uri() . '/assets/img/news.png' ?>"
                                     alt="#" class="news__img">
                                <div class="news__date">
                                    <span class="news__month">OCT</span>
                                    <span class="news__day">19</span>
                                </div>
                            </div>
                            <div class="news__content">
                                <h3 class="news__title">How to Prep
                                    Your Home for Fall</h3>
                                <div class="news__text">
                                    Well, summer has long since passed and we’re officially in
                                    fall. It’s the perfect time to refresh your home and give
                                    it a good once over in advance of autumn winds and wintry
                                    weather. As the seasons change, so do the needs of our homes,
                                    as well as the activities we do in and around them. It’s a
                                    good time to perform any necessary or desired maintenance
                                    in order to keep your home running smoothly.
                                    <a href="#" class="news__more">Read More</a>
                                </div>
                            </div>
                            <div class="news__author">By Author</div>
                        </div>
                    </li>
                    <li class="news__item col-sm-12 col-md-4">
                        <div class="news__item-wrapper">
                            <div class="news__wrapper">
                                <img style="display: block; width: 100%;"
                                     src="<?php echo get_template_directory_uri() . '/assets/img/news.png' ?>"
                                     alt="#" class="news__img">
                                <div class="news__date">
                                    <span class="news__month">OCT</span>
                                    <span class="news__day">19</span>
                                </div>
                            </div>
                            <div class="news__content">
                                <h3 class="news__title">How to Prep
                                    Your Home for Fall</h3>
                                <div class="news__text">
                                    Well, summer has long since passed and we’re officially in
                                    fall. It’s the perfect time to refresh your home and give
                                    it a good once over in advance of autumn winds and wintry
                                    weather. As the seasons change, so do the needs of our homes,
                                    as well as the activities we do in and around them. It’s a
                                    good time to perform any necessary or desired maintenance
                                    in order to keep your home running smoothly.
                                    <a href="#" class="news__more">Read More</a>
                                </div>
                            </div>
                            <div class="news__author">By Author</div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="news__link">View More News</a>
            </div>
        </section>
    </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>
