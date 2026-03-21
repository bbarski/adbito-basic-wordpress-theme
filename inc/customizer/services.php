<?php
function mytheme_customize_services($wp_customize) {


$wp_customize->add_section( 'mytheme_services_section', array(
    'title'       => __( 'Services Section', 'mytheme' ),
    'priority'    => 30,
    'description' => __( 'Customize the Services section with an image, title, and description.', 'mytheme' ),
) );

$wp_customize->add_setting( 'mytheme_services_title', array(
    'default'           => __( 'Our Services', 'mytheme' ),
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'mytheme_services_title_control', array(
    'label'    => __( 'Section Title', 'mytheme' ),
    'section'  => 'mytheme_services_section',
    'settings' => 'mytheme_services_title',
    'type'     => 'text',
) );

$wp_customize->add_setting( 'mytheme_services_image', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_services_image', array(
    'label'    => __( 'Upload Service Image', 'mytheme' ),
    'section'  => 'mytheme_services_section',
    'settings' => 'mytheme_services_image',
) ) );

$wp_customize->add_setting( 'mytheme_services_description', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_textarea_field',
) );
$wp_customize->add_control( 'mytheme_services_description_control', array(
    'label'    => __( 'Services Description', 'mytheme' ),
    'section'  => 'mytheme_services_section',
    'settings' => 'mytheme_services_description',
    'type'     => 'textarea',
) );

$wp_customize->add_setting( 'mytheme_services_image_position', array(
    'default'           => 'left',
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'mytheme_services_image_position_control', array(
    'label'    => __( 'Image Position', 'mytheme' ),
    'section'  => 'mytheme_services_section',
    'settings' => 'mytheme_services_image_position',
    'type'     => 'radio',
    'choices'  => array(
        'left'  => __( 'Left', 'mytheme' ),
        'right' => __( 'Right', 'mytheme' ),
    ),
) );
	
}	