<?php
get_header();
?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="banner"
			         style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bigstock-Two-Story-House-With-Wooden-Wa-143111315.jpg'?>)">
			</section>
			<div class="container">
				<?php get_template_part( 'template-parts/breadcrumbs' ) ?>
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
				<?php if ( have_posts() ):
					while ( have_posts() ): the_post(); ?>
						<article class="content">
							<div class="row">
                                <div class="content__image">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
									?>
								</div>
                                <div class="content__wrapper">
									<h2 class="content__title">
										<?php the_title() ?>
									</h2>
									<div class="content__text">
										<?php the_excerpt(); ?>
										<a href="<?php the_permalink() ?>"
										   class="news__more">Read More</a>
									</div>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					No posts found
				<?php endif; ?>
			</div>
			<?php the_posts_pagination() ?>
			</div>
		</main>
	</section>
<?php get_template_part( 'template-parts/find_block' ) ?>
<?php get_template_part( 'template-parts/contacts_block' ) ?>
<?php
get_footer();
?>