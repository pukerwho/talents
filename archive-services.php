<?php get_header(); ?>

<div class="p_services">
	<div class="container">
		<!-- begin Welcome -->
		<div class="p_services__welcome">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-5 text-center">
					<h1 class="mb-5">Services</h1>
					<div class="p_services__line"></div>
				</div>
			</div>	
		</div>
		<!-- end Welcome -->
		<!-- begin Services List -->
		<div class="p_services__list">
			<div class="row">
				<?php 
	          $custom_query = new WP_Query( array( 'post_type' => 'services', 'orderby' => 'menu_order' ) );
	          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					<div class="col-md-4 pb-5">
						<a href="<?php the_permalink(); ?>">
							<div class="p_services__item">
								<div class="p_services__item__img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								</div>
								<div class="p_services__item__title">
									<?php the_title(); ?>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; else: ?>
				  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<!-- end Services List -->
	</div>	
</div>


<?php get_footer(); ?>