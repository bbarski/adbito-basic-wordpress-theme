<?php
function mytheme_customize_colors($wp_customize) {    

	$wp_customize->add_section( 'mytheme_background_section', array(
        'title'    => __( 'Color Schema Changer', 'mytheme' ),
        'priority' => 30,
    ));

    // Add a setting for background color choice (radio buttons)
    $wp_customize->add_setting( 'mytheme_background_color_choice', array(
        'default'   => 'default', // Default choice
        'transport' => 'refresh', // Refresh the page to apply changes
    ));

    // Add a control to choose background color using radio buttons
    $wp_customize->add_control( 'mytheme_background_color_choice', array(
        'label'    => __( 'Choose Background Color', 'mytheme' ),
        'section'  => 'mytheme_background_section',
        'settings' => 'mytheme_background_color_choice',
        'type'     => 'radio',
        'choices'  => array(
            'default' => __( 'Default', 'mytheme' ),
            'happy'   => __( 'Happy', 'mytheme' ),
        ),
    ));

}