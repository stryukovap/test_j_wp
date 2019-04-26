<?php
get_header();
?>
<section id="primary" class="content-area">
    <div class="banner" role="banner"
         style="background-image: url(<?php echo get_field( 'post_background' ) ?>)">
    </div>
    <div class="container">
		<?php get_template_part( 'template-parts/breadcrumbs' ) ?>
        <article class="content">
            <div class="row">
				<?php the_post(); ?>
                <h1 class="content__title col-12">
					<?php the_title() ?>
                </h1>
                <div class="content__image col-12">
					<?php
					if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
						echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
						the_post_thumbnail( 'large' );
						echo '</a>';
					}
					?>
                </div>
                <div class="content__wrapper col-12">
                    <div class="content__text">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
	<?php get_template_part( 'template-parts/find_block' ) ?>
	<?php get_template_part( 'template-parts/contacts_block' ) ?>
</section>

<?php
get_footer();
?>

