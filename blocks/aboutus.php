<section id="aboutus" class="py-5">
	<div class="container">
		<div class="row align-items-center mb-5">
			<div class="col-md-5">
				<div class="aboutus-text">
					<h2 class="mb-4"><?php echo carbon_get_theme_option( 'crb_aboutus_title' ); ?></h2>
					<div class="lead mb-4">
						<?php echo carbon_get_theme_option( 'crb_aboutus_text' ); ?>
					</div>
					<div class="aboutus-grid">
						<?php 
						$aboutus_items = carbon_get_theme_option( 'crb_aboutus_items' );
						foreach ( $aboutus_items as $aboutus_item ): ?>
							<div class="aboutus-item">
								<img src="<?php echo $aboutus_item['crb_aboutus_items_img'] ?>" alt="<?php echo $aboutus_item['crb_aboutus_items_text'] ?>" width="50px" class="mb-3">
								<br>
								<?php echo $aboutus_item['crb_aboutus_items_text'] ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="aboutus-photo-main">
					<div class="scrollme">
						<div 
				      class="animateme"
				      data-when="enter"
				      data-from="1"
				      data-to="0"
				      data-easing="easeinout"
				      data-translatey="60"
				    >
							<img src="<?php echo carbon_get_theme_option( 'crb_aboutus_photo_one' ); ?>" alt="">
						</div>
					</div>
				</div>
				<div class="aboutus-photo">
					<img src="<?php echo carbon_get_theme_option( 'crb_aboutus_photo_two' ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>