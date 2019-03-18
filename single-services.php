<?php get_header(); ?>

<div class="welcome d-flex align-items-center mb-5" style="height: 600px; background: url(<?php echo get_the_post_thumbnail_url(); ?>);background-size: cover; background-position: 50% 25%;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<svg class="rounded-corners" viewBox="0 0 100 100" preserveAspectRatio="xMidYMax slice" style="width: 100%; height: 100%; margin: 0; position: absolute; left: 0; bottom: 0; z-index: 2;">
		<defs>
			<mask id="hole">
				<rect width="100%" height="100%" fill="white"></rect>
				<circle class="clipper" r="165" cx="50" cy="-65" fill="black"></circle>
			</mask>
		</defs>
		<rect width="100%" height="100%" fill="white" mask="url(#hole)"></rect>
	</svg>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="first-content mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="lead bg-white custom-box-shadow p-4">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if(carbon_get_the_post_meta('crb_services_second')): ?>
<div class="mb-5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="lead bg-light-blue p-4">
					<?php echo carbon_get_the_post_meta('crb_services_second'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif ?>
<?php endwhile; else: ?>
	<p><?php _e('Сорямба, ничего нет.'); ?></p>
<?php endif; ?>

<?php get_template_part('blocks/buttons_block'); ?>
<?php get_template_part('blocks/clients'); ?>

<?php get_footer(); ?>