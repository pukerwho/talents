<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Common'), array(
        Field::make( 'image', 'crb_common_logo', 'Логотип' )->set_value_type( 'url'),
    ) )
    ->add_tab( __('About Us'), array(
    	Field::make( 'text', 'crb_aboutus_title', 'About Us Title' ),
        Field::make( 'textarea', 'crb_aboutus_text', 'About Us Text' ),
        Field::make( 'complex', 'crb_aboutus_items' )
		    	->add_fields( array(
		        Field::make( 'image', 'crb_aboutus_items_img' )->set_value_type( 'url'),
		        Field::make( 'text', 'crb_aboutus_items_text' ),
		    ) ),
		    Field::make( 'image', 'crb_aboutus_photo_one', 'Главное фото' )->set_value_type( 'url'),
		    Field::make( 'image', 'crb_aboutus_photo_two', 'Скрытое фото' )->set_value_type( 'url'),	
    ) )
    ->add_tab( __('Client'), array(
        Field::make( 'complex', 'crb_clients_items' )
		    	->add_fields( array(
		        Field::make( 'image', 'crb_clients_items_img' )->set_value_type( 'url'),
		    ) ),
    ) )
    ->add_tab( __('Footer'), array(
        Field::make( 'image', 'crb_footer_logo', 'Footer Logo' )->set_value_type( 'url'),
        Field::make( 'textarea', 'crb_footer_description', 'Footer description' ),
        Field::make( 'text', 'crb_footer_support_title', 'Support title' ),
        Field::make( 'textarea', 'crb_footer_support_desc', 'Support description' ),
    ) )
    ->add_tab( __('Contact'), array(
        Field::make( 'text', 'crb_contact_address', 'Contact Address' ),
        Field::make( 'text', 'crb_contact_email', 'Contact email' ),
        Field::make( 'text', 'crb_contact_phone', 'Contact phone' ),
        Field::make( 'text', 'crb_contact_facebook', 'Contact facebook link' ),
        Field::make( 'text', 'crb_contact_instagram', 'Contact instagram link' ),
    ) );
}

?>