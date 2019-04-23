<section class="services block">
	<div class="container">
		<h2 class="services__title block__title">
			<?php echo get_field( 'block2_title', '5' ) ?>
		</h2>
		<div class="services__desc block__desc">
			<?php echo get_field( 'block2_description', '5' ) ?>
		</div>
		<ul class="services__list row">
			<?php
			$post_id = get_the_ID();
			$args    = array(
				'numberposts'      => 0,
				'order'            => 'ASC',
				'post_type'        => 'services',
				'suppress_filters' => 'true',
				'exclude'          => $post_id
			);
			$posts   = get_posts( $args );
			foreach ( $posts as $post ) {
				setup_postdata( $post );
				?>
				<li class="services__item item col-sm-12 col-md-4">
					<a href="<?php the_permalink() ?>" class="item__link">
						<div class="item__wrapper">
							<div class="item__circle"></div>
							<img src="<?php echo get_field( 'service_icon' ) ?>"
							     alt="<?php the_title() ?>" class="item__icon">
						</div>
						<h3 class="item__title"><?php the_title() ?></h3>
					</a>
					<div class="item__desc">
						<?php the_excerpt(); ?>
					</div>
				</li>
				<?php
			}
			wp_reset_postdata(); ?>
		</ul>
		<a href="/services/" class="services__link">View All Services</a>
	</div>
</section>