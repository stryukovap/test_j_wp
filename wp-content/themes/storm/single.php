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
                    <div class="content__image col-sm-12 col-md-6">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						?>
                    </div>
                    <div class="content__wrapper col-sm-12 col-md-6">
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
	    <?php get_template_part( 'template-parts/services_block' ) ?>
	    <?php get_template_part( 'template-parts/started_block' ) ?>
	    <?php get_template_part( 'template-parts/find_block' ) ?>
	    <?php get_template_part( 'template-parts/contacts_block' ) ?>
    </main>
</section>
<?php
get_footer();
?>

