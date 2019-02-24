<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'Description' )
    ->where( 'post_type', '=', 'services' )
    ->add_fields( array(
      Field::make( 'text', 'crb_services_description', __( 'Короткое описание ') ),
      Field::make( 'rich_text', 'crb_services_second', __( 'Второй текст')),
  ) );
}

?>