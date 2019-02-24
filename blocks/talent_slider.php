<section id="talent" class="talent py-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<h2 class="text-center text-white">Our services</h2>
			</div>
		</div>
		<div class="row">
			<!-- Slider main container -->
			<div class="swiper-container swiper-talent">
			  <!-- Additional required wrapper -->
			  <div class="swiper-wrapper mb-5">
			    <!-- Slides -->
			    <?php 
	          $custom_query = new WP_Query( array( 'post_type' => 'services', 'orderby' => 'menu_order' ) );
	          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				    <div class="swiper-slide">
					    <a href="<?php the_permalink(); ?>">	
					    	<div class="picture">
					    		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					      </div>
					      <div class="detail">
					        <h3 class="mb-3"><?php the_title(); ?></h3>
					        <?php if(carbon_get_the_post_meta('crb_services_description')): ?>
					        <h4><?php echo carbon_get_the_post_meta('crb_services_description'); ?></h4>
					        <?php endif ?>
					        <!-- <span>Model</span> -->
					      </div>
					    </a>
				    </div>
				  <?php endwhile; endif; ?>
			  </div>
			  <!-- If we need pagination -->
			  <div class="swiper-pagination"></div>

			  <!-- If we need navigation buttons -->
			  <!--     <div class="swiper-button-prev"></div> -->
			  <!--     <div class="swiper-button-next"></div> -->

			</div>
		</div>
	</div>
</section>