<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <div class="contacts__form">
                <h2 class="contacts__form-title">Contact Us Today</h2>
                <div class="contacts__form-desc contacts__form-desc--post">
                    Need more information about our services or insurance claims?
                    Fill out the form below and representitive will be in touch!
                </div>
                <a href="#" class="contacts__link">Contact Your Local Storm Guard Franchise</a>
                <a href="#" class="contacts__link">Contact the Storm Guard Corporate Office</a>
            </div>
            <div class="contacts__projects">
                <h2 class="contacts__projects-title">Check Out Our Past Projects</h2>
                <div class="contacts__projects-desc contacts__projects-desc--post">
                    Want to see examples of our past work? Check out the gallery
                    below to see projects we have completed in the past.
                    <a href="/gallery/" class="contacts__projects-portfolio">View the whole portfolio.</a>
                </div>
                <ul class="contacts__projects-list">
					<?php
					$args  = array(
						'numberposts'      => 8,
						'order'            => 'DESC',
						'post_type'        => 'gallery',
						'orderby'          => 'date',
						'suppress_filters' => 'true'
					);
					$posts = get_posts( $args );
					foreach ( $posts as $post ) {
						setup_postdata( $post );
						?>
                        <li class="contacts__projects-item">
							<?php
							if ( has_post_thumbnail() ) {
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
								echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
								the_post_thumbnail( 'storm-mini' );
								echo '</a>';
							}
							?>
                        </li>
						<?php
					}
					wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>