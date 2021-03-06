<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="p_contact">
	
	<div class="p_contact__rightpng">
		<img src="<?php bloginfo('template_url'); ?>/img/contact-rightpng.png" alt="Contact Us 1">
	</div>

	<div class="container py-5">
		<!-- begin p_contact__welcome -->
		<div class="p_contact__welcome">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="mb-4"><?php the_title(); ?></h1>
					<div class="p_contact__link mb-2">
						<a href="tel:<?php echo carbon_get_theme_option( 'crb_contact_phone' ); ?>" class="p_contact__link__msize"><?php echo carbon_get_theme_option( 'crb_contact_phone' ); ?></a>	
					</div>
					<div class="p_contact__link mb-5">
						<a href="mailto:<?php echo carbon_get_theme_option( 'crb_contact_email' ); ?>" class="p_contact__link__grey"><?php echo carbon_get_theme_option( 'crb_contact_email' ); ?></a>	
					</div>
					<div class="p_contact__buttons">
						<div class="buttons-btn-blue" data-toggle="modal" data-target="#hireModal">
							<?php echo carbon_get_theme_option( 'crb_buttons_hire' ); ?>
						</div>
						<div class="buttons-btn-red" data-toggle="modal" data-target="#joinModal">
							<?php echo carbon_get_theme_option( 'crb_buttons_join' ); ?>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- end p_contact__welcome -->
		<!-- begin p_contact__footer mb-5 -->
		<div class="p_contact__footer mb-5">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="p_contact__line"></div>
					<div class="p_contact__footer__lsize text-center py-3">
						Do you have a question? Write to us!
					</div>
					<div class="p_contact__footer__form mb-5">
						<?php echo do_shortcode('[contact-form-7 id="58" title="Contact Us"]') ?>
					</div>
				</div>
			</div>
		</div>
		<!-- end p_contact__footer mb-5 -->
		<!-- begin p_contact__map -->
		<div class="p_contact__map">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="p_contact__line"></div>
					<div class="p_contact__footer__lsize text-center py-3">
						Our address
					</div>
					<?php echo carbon_get_theme_option( 'crb_map' ); ?>
				</div>
			</div>
		</div>
		<!-- end p_contact__map -->
	</div>
</div>

<div class="p_contact__leftpng">
	<img src="<?php bloginfo('template_url'); ?>/img/contact-leftpng.png" alt="Contact Us 1">
</div>

<?php get_footer(); ?>