<section id="clients">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<h2 class="text-center">Our Clients</h2>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="clients-grid">
					<?php 
						$clients_items = carbon_get_theme_option( 'crb_clients_items' );
						foreach ( $clients_items as $clients_item ): ?>
							<div class="clients-item">
								<img src="<?php echo $clients_item['crb_clients_items_img'] ?>" alt="">
							</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>