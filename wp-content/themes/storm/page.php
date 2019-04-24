<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?>
<section class="banner"
         style="background-image: url(<?php echo get_field( 'post_background' ) ?>)">
</section>
<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
	        <?php get_template_part( 'template-parts/breadcrumbs' ) ?>
			<?php the_post(); ?>
            <article class="page-full">
                <h1><?php the_title() ?></h1>
                <div><?php the_content() ?></div>
            </article>
        </div>
    </main>
</section>
<?php get_template_part( 'template-parts/find_block' ) ?>
<?php get_template_part( 'template-parts/contacts_block' ) ?>
<?php get_footer(); ?>
