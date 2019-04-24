<?php get_header(); ?>
	<section class="banner"
	         style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bigstock-Two-Story-House-With-Wooden-Wa-143111315.jpg' ?>)">
	</section>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php
					if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </div>
				<header class="page-header">
					<h1 class="page-title">Search results for:</h1>
					<div class="page-description"><?php echo get_search_query(); ?></div>
				</header>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="thumbnail">
							<?php the_post_thumbnail() ?>
						</div>
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_title( '<h3>', '</h3>' ); ?></a>
					<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
					<small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>
					<!-- Display the Post's content in a div box. -->
					<div class="entry">
						<?php the_excerpt(); ?>
					</div>
					<!-- Display a comma separated list of the Post's Categories. -->
					<p class="postmetadata"><?php _e( 'Posted in' ); ?><?php the_category( ', ' ); ?></p>
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				<?php the_posts_pagination() ?>
			</div>
		</main>
	</section>
<?php get_template_part( 'template-parts/find_block' ) ?>
<?php get_template_part( 'template-parts/contacts_block' ) ?>
<?php get_footer(); ?>