<?php
function mytheme_customize_header($wp_customize) {

    $wp_customize->add_section( 'mytheme_logo_section', array(
        'title'    => __( 'Header logo', 'mytheme' ),
        'priority' => 25,
    ) );

    $wp_customize->add_setting( 'mytheme_custom_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_custom_logo_control', array(
        'label'    => __( 'Upload Logo', 'mytheme' ),
        'section'  => 'mytheme_logo_section',
        'settings' => 'mytheme_custom_logo',
    ) ) );
}