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
								<div class="content__wrapper col-12">
									<h2 class="content__title">
										<a href="<?php the_permalink() ?>" class="content__link"><?php the_title() ?></a>
									</h2>
									<div class="content__text mt-3">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p>Sorry, no posts matched your criteria.</p>
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