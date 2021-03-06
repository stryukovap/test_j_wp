<?php
get_header();
?>
    <section class="banner"
             style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bigstock-Two-Story-House-With-Wooden-Wa-143111315.jpg' ?>)">
    </section>
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
	            <?php get_template_part( 'template-parts/breadcrumbs' ) ?>
                <div class="error-404">
                    <h1 class="error-404__title">Oops! That page can&rsquo;t be found.</h1>
                    <div class="error-404__content">
                        <p class="error-404__desc">It looks like nothing was found at this location. Maybe try a
                            search?</p>
						<?php get_search_form(); ?>
                        <a class="error-404__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Visit Home Page</a>
                    </div>
                </div>
            </div>
        </main>
    </section>
<?php get_template_part( 'template-parts/find_block' ) ?>
<?php get_template_part( 'template-parts/contacts_block' ) ?>
<?php
get_footer();
?>