<?php
/*
Template Name: Front page
*/
?>

<?php get_header(); ?>
<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="promo"
                 style="background-image: url(<?php echo get_field( 'promo_background' ) ?>)">
            <div class="container">
                <div class="promo__desc col-sm-12 col-md-6">
                    <div class="promo__desc-text">
						<?php the_field( 'main_title' ) ?>
                    </div>
                    <a href="<?php echo get_field( 'button_url' ) ?>"
                       class="promo__desc-link"><?php echo get_field( 'button_text' ) ?> ></a>
                </div>
            </div>
        </section>
	    <?php get_template_part('template-parts/find_block') ?>
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
                            <a href="<?php the_permalink() ?>" class="item__link">
                                <div class="item__wrapper">
                                    <div class="item__circle"></div>
                                    <img src="<?php echo get_field( 'service_icon' ) ?>"
                                         alt="<?php the_title() ?>" class="item__icon">
                                </div>
                                <h4 class="item__title"><?php the_title() ?></h4>
                            </a>
                            <div class="item__desc">
								<?php the_excerpt(); ?>
                            </div>
                        </li>
						<?php
					}
					wp_reset_postdata(); ?>
                </ul>
                <a href="/services/" class="services__link">View All Services</a>
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
                                        <span class="news__month"><?php echo get_the_date('M'); ?></span>
                                        <span class="news__day"><?php echo get_the_date('d'); ?></span>
                                    </div>
                                </div>
                                <div class="news__content">
                                    <h3 class="news__title">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_title() ?></a>
                                    </h3>
                                    <div class="news__text"><?php the_content(); ?>
                                        <a href="<?php the_permalink() ?>"
                                           class="news__more">Read More</a>
                                    </div>
                                </div>
                                <div class="news__author">BY <?php the_author() ?></div>
                            </div>
                        </li>
						<?php
					}
					wp_reset_postdata(); ?>
                </ul>
                <a href="/news/" class="news__link">View More News</a>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 contacts__form">
                        <h2 class="contacts__form-title">Contact Us Today</h2>
                        <div class="contacts__form-desc">
                            Need more information about our services or insurance claims?
                            Fill out the form below and representitive will be in touch!
                        </div>
						<?php echo do_shortcode( '[contact-form-7 id="108" title="Contact Form for Main Page"]' ); ?>
                    </div>
                    <div class="col-md-6 col-xs-12 contacts__projects">
                        <h2 class="contacts__projects-title">Check Out Our Past Projects</h2>
                        <div class="contacts__projects-desc">
                            Want to see examples of our past work? Check out the gallery
                            below to see projects we have completed in the past.
                        </div>
                        <ul class="contacts__projects-list row">
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                            <li class="contacts__projects-item col-3">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/bigstock-Luxury-One-Level-House-Exterio-143103731.png' ?>"
                                     alt="#">
                            </li>
                        </ul>
                        <div class="contacts__projects-wrapper">
                            <a href="#" class="contacts__projects-link">View More Photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</section>
<?php get_footer(); ?>
