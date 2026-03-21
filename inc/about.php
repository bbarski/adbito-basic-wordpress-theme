<?php
function mytheme_customize_about($wp_customize) {
	
    $wp_customize->add_section( 'mytheme_about_us_section', array(
        'title'       => __( 'About Us Section', 'mytheme' ),
        'priority'    => 29,
        'description' => __( 'Customize the About Us section with an image, title, and text.', 'mytheme' ),
    ) );

    $wp_customize->add_setting( 'mytheme_about_us_title', array(
        'default'           => __( 'About Us', 'mytheme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'mytheme_about_us_title_control', array(
        'label'    => __( 'Section Title', 'mytheme' ),
        'section'  => 'mytheme_about_us_section',
        'settings' => 'mytheme_about_us_title',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'mytheme_about_us_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_about_us_image', array(
        'label'    => __( 'Upload Section Image', 'mytheme' ),
        'section'  => 'mytheme_about_us_section',
        'settings' => 'mytheme_about_us_image',
    ) ) );

    $wp_customize->add_setting( 'mytheme_about_us_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'mytheme_about_us_text_control', array(
        'label'    => __( 'Section Content', 'mytheme' ),
        'section'  => 'mytheme_about_us_section',
        'settings' => 'mytheme_about_us_text',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'mytheme_about_us_image_position', array(
        'default'           => 'left',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'mytheme_about_us_image_position_control', array(
        'label'    => __( 'Image Position', 'mytheme' ),
        'section'  => 'mytheme_about_us_section',
        'settings' => 'mytheme_about_us_image_position',
        'type'     => 'radio',
        'choices'  => array(
            'left'  => __( 'Left', 'mytheme' ),
            'right' => __( 'Right', 'mytheme' ),
        ),
    ) );
	
}