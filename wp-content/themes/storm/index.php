<?php get_header(); ?>
    <section class="banner"
             style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bigstock-Two-Story-House-With-Wooden-Wa-143111315.jpg' ?>)">
    </section>
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
				<?php get_template_part( 'template-parts/breadcrumbs' ) ?>
                <h1><?php single_post_title(); ?></h1>
                <div class="posts__wrapper">
                    <ul class="posts__list">
			            <?php if ( have_posts() ) :
			            while ( have_posts() ) :
				            the_post(); ?>
                            <li class="posts__item">
                                <div class="news__item-wrapper">
                                    <div class="news__wrapper">
							            <?php
							            if ( has_post_thumbnail() ) {
								            the_post_thumbnail();
							            }
							            ?>
                                        <div class="news__date">
                                            <span class="news__month"><?php echo get_the_date( 'M' ); ?></span>
                                            <span class="news__day"><?php echo get_the_date( 'd' ); ?></span>
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
			            <?php endwhile; ?>
                    </ul>
                    <div class="posts__sidebar">
						<?php get_sidebar( 'sidebar-blog' ) ?>
                    </div>
                </div>
            <?php else : ?>
                <p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
				<?php the_posts_pagination() ?>
            </div>
        </main>
    </section>
<?php get_template_part( 'template-parts/find_block' ) ?>
<?php get_template_part( 'template-parts/contacts_block' ) ?>
<?php get_footer(); ?>