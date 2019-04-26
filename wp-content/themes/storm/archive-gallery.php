<?php
get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="banner"
                     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bigstock-Two-Story-House-With-Wooden-Wa-143111315.jpg' ?>)">
            </section>
            <div class="container">
				<?php get_template_part( 'template-parts/breadcrumbs' ) ?>
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
                <section class="content">
                    <div class="row">
						<?php if ( have_posts() ):
							while ( have_posts() ): the_post(); ?>
                                <article class="content__item col-sm-12 col-md-6">
                                    <div class="content__image">
										<?php
										if ( has_post_thumbnail() ) {
											$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
											echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
											the_post_thumbnail( 'large' );
											echo '</a>';
										}
										?>
                                    </div>
                                    <h2 class="content__title">
                                        <a href="<?php the_permalink() ?>"
                                           class="news__more"><?php the_title() ?></a>
                                    </h2>
                                    <div class="content__wrapper">
                                        <div class="content__text">
											<?php the_content(); ?>
                                        </div>
                                    </div>
                                </article>
							<?php endwhile; ?>
						<?php else: ?>
                    </div>
                    <p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
					<?php the_posts_pagination() ?>
                </section>
            </div>
        </main>
    </section>
<?php get_template_part( 'template-parts/find_block' ) ?>
<?php get_template_part( 'template-parts/contacts_block' ) ?>
<?php
get_footer();
?>