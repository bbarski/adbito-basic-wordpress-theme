<?php
function mytheme_customize_testimonials($wp_customize) {
	
    $wp_customize->add_section( 'mytheme_testimonials_section', array(
        'title'       => __( 'Testimonials Section', 'mytheme' ),
        'priority'    => 28,
        'description' => 'Add testimonials with customer photo and text content.',
    ) );

    // Setting for the number of testimonials
    $wp_customize->add_setting( 'mytheme_testimonials_count', array(
        'default'           => 4,
        'sanitize_callback' => 'absint',
    ) );

    // Control for the number of testimonials
    $wp_customize->add_control( 'mytheme_testimonials_count_control', array(
        'label'    => __( 'Number of Testimonials', 'mytheme' ),
        'section'  => 'mytheme_testimonials_section',
        'settings' => 'mytheme_testimonials_count',
        'type'     => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10, // Set a maximum number of testimonials
        ),
    ) );

    // Loop to add settings and controls for each testimonial
    $testimonials_count = get_theme_mod( 'mytheme_testimonials_count', 4 );
    for ( $i = 1; $i <= $testimonials_count; $i++ ) {
        // Setting for customer photo
        $wp_customize->add_setting( "mytheme_testimonial_{$i}_photo", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );

        // Control for customer photo
        $wp_customize->add_control( 
            new WP_Customize_Image_Control(
                $wp_customize,
                "mytheme_testimonial_{$i}_photo_control",
                array(
                    'label'    => __( "Testimonial {$i} Photo", 'mytheme' ),
                    'section'  => 'mytheme_testimonials_section',
                    'settings' => "mytheme_testimonial_{$i}_photo",
                )
            )
        );

        // Setting for testimonial text
        $wp_customize->add_setting( "mytheme_testimonial_{$i}_text", array(
            'default'           => "Customer testimonial {$i}.",
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );

        // Control for testimonial text
        $wp_customize->add_control( "mytheme_testimonial_{$i}_text_control", array(
            'label'    => __( "Testimonial {$i} Text", 'mytheme' ),
            'section'  => 'mytheme_testimonials_section',
            'settings' => "mytheme_testimonial_{$i}_text",
            'type'     => 'textarea',
        ) );

        // Setting for customer name
        $wp_customize->add_setting( "mytheme_testimonial_{$i}_name", array(
            'default'           => "Customer {$i}",
            'sanitize_callback' => 'sanitize_text_field',
        ) );

        // Control for customer name
        $wp_customize->add_control( "mytheme_testimonial_{$i}_name_control", array(
            'label'    => __( "Testimonial {$i} Name", 'mytheme' ),
            'section'  => 'mytheme_testimonials_section',
            'settings' => "mytheme_testimonial_{$i}_name",
            'type'     => 'text',
        ) );
    }	
	
}