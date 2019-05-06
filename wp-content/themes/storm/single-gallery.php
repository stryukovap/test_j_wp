<?php
get_header();
?>
<section id="primary" class="content-area">
    <div class="banner" role="banner"
         style="background-image: url(<?php echo get_field( 'post_background' ) ?>)">
    </div>
    <div class="container">
		<?php get_template_part( 'template-parts/breadcrumbs' ) ?>
        <article class="gallery">
				<?php the_post(); ?>
            <h1 class="gallery__title">
					<?php the_title() ?>
                </h1>
            <div class="gallery__image">
					<?php
					if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
						echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
						the_post_thumbnail( 'large' );
						echo '</a>';
					}
					?>
                </div>
            <div class="gallery__inner">
                <div class="gallery__text">
						<?php the_content(); ?>
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

