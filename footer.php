    </section>
    <footer id="footer" class="py-5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="logo mb-4">
    					<img src="<?php echo carbon_get_theme_option( 'crb_footer_logo' ); ?>" alt="">
    				</div>
    				<div class="mb-4">
    					<?php echo carbon_get_theme_option( 'crb_footer_description' ); ?>
    				</div>
    				<div class="social-icons">
    					<li>
    						<i class="fab fa-facebook-f"></i>
    					</li>
    					<li>
    						<i class="fab fa-instagram"></i>
    					</li>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<h3 class="mb-4">Contact Info</h3>
    				<div class="contact-info">
    					<div class="mb-3">
    						<i class="fas fa-map-marker-alt mr-3"></i>
    						<?php echo carbon_get_theme_option( 'crb_contact_address' ); ?>
    					</div>
    					<div class="mb-3">
    						<i class="far fa-envelope mr-3"></i>
    						<a href="mailto:<?php echo carbon_get_theme_option( 'crb_contact_email' ); ?>"><?php echo carbon_get_theme_option( 'crb_contact_email' ); ?></a>
    					</div>
    					<div class="mb-3">
    						<i class="fas fa-phone mr-3"></i>
    						<?php echo carbon_get_theme_option( 'crb_contact_phone' ); ?>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<h3 class="mb-4"><?php echo carbon_get_theme_option( 'crb_footer_support_title' ); ?></h3>
    				<div class="lead mb-3"><?php echo carbon_get_theme_option( 'crb_footer_support_desc' ); ?></div>
    				<div>
    					<div class="buttons-btn-blue mr-3" data-toggle="modal" data-target="#hireModal">
							Hire
						</div>
						<div class="buttons-btn-red" data-toggle="modal" data-target="#joinModal">
							Join Us
						</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>
    <!-- HIRE Modal -->
    <div class="modal fade" id="hireModal" tabindex="-1" role="dialog" aria-labelledby="hireModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hire</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="25" title="Hire"]'); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- JOIN Modal -->
    <div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="joinModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Join Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="25" title="Hire"]'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>