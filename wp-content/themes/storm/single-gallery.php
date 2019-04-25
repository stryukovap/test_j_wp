<?php
get_header();
?>
<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="banner"
		         style="background-image: url(<?php echo get_field( 'post_background' ) ?>)">
		</section>
		<div class="container">
			<?php get_template_part( 'template-parts/breadcrumbs' ) ?>
			<article class="content">
				<div class="row">
					<?php the_post(); ?>
					<div class="content__wrapper col-12">
						<h1 class="content__title">
							<?php the_title() ?>
						</h1>
						<div class="content__text">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</article>
		</div>
		<?php get_template_part( 'template-parts/find_block' ) ?>
		<?php get_template_part( 'template-parts/contacts_block' ) ?>
	</main>
</section>

<?php
get_footer();
?>

