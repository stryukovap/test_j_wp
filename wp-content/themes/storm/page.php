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
                                <a href="<?= the_permalink() ?>" class="started__item-link">
                                    <h4 class="started__item-title"><?= the_title() ?> ></h4>
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
                        <li>
                            <div class="slider__testimonial">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec luctus gravida neque. Morbi tincidunt quam vel ligula
                                dapibus, quis accumsan dolor consequat. Quisque quis nibh
                                posuere, lobortis odio ut, auctor erat. Morbi et felis id
                                mi rutrum egestas. Etiam tempus justo tellus, quis congue
                                mi convallis dapibus. Maecenas vitae pharetra eros.
                                Praesent placerat dapibus laoreet. Nunc eu semper magna,
                                et aliquet elit. Pellentesque nisl sapien, gravida vitae
                                ipsum eu, scelerisque elementum massa. Cras venenatis
                                vitae odio in pretium. Quisque lacinia eros blandit
                                velit congue, id tincidunt quam ullamcorper.
                            </div>
                            <div class="slider__author">
                                <div class="slider__author-title">
                                    John Smith
                                </div>
                                <div class="slider__author-desc">
                                    Homeowner
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider__testimonial">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec luctus gravida neque. Morbi tincidunt quam vel ligula
                                dapibus, quis accumsan dolor consequat. Quisque quis nibh
                                posuere, lobortis odio ut, auctor erat. Morbi et felis id
                                mi rutrum egestas. Etiam tempus justo tellus, quis congue
                                mi convallis dapibus. Maecenas vitae pharetra eros.
                                Praesent placerat dapibus laoreet. Nunc eu semper magna,
                                et aliquet elit. Pellentesque nisl sapien, gravida vitae
                                ipsum eu, scelerisque elementum massa. Cras venenatis
                                vitae odio in pretium. Quisque lacinia eros blandit
                                velit congue, id tincidunt quam ullamcorper.
                            </div>
                            <div class="slider__author">
                                <div class="slider__author-title">
                                    John Smith
                                </div>
                                <div class="slider__author-desc">
                                    Homeowner
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
    </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>
