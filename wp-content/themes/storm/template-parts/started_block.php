<section class="started block">
	<div class="container">
		<h2 class="started__title block__title">
			<?php echo get_field( 'block3_title', '5' ) ?>
		</h2>
		<div class="started__desc block__desc">
			<?php echo get_field( 'block3_description', '5' ) ?>
		</div>
		<ul class="started__list row">
			<?php
			$args  = array(
				'category_name'    => 'get-started',
				'numberposts'      => 0,
				'order'            => 'ASC',
				'post_type'        => 'post',
				'suppress_filters' => 'true'
			);
			$posts = get_posts( $args );
			foreach ( $posts as $post ) {
				setup_postdata( $post );
				?>
				<li class="started__item col-sm-12 col-md-4">
					<div class="started__item-wrapper">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						?>
					</div>
					<a href="<?php the_permalink() ?>" class="started__item-link">
						<h4 class="started__item-title"><?php the_title() ?> ></h4>
					</a>
				</li>
				<?php
			}
			wp_reset_postdata(); ?>
		</ul>
	</div>
</section>