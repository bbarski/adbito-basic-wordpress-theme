<?php
function mytheme_customize_benefits($wp_customize) {
 
    // Add benefits section
    $wp_customize->add_section( 'mytheme_benefits_section', array(
        'title'       => __( 'Benefits Section', 'mytheme' ),
        'priority'    => 27,
        'description' => 'Add custom text for the Benefits Section here.',
    ) );

    // Setting for the number of benefits
    $wp_customize->add_setting( 'mytheme_benefits_count', array(
        'default'           => 3,
        'sanitize_callback' => 'absint',
    ) );

    // Control for the number of benefits
    $wp_customize->add_control( 'mytheme_benefits_count_control', array(
        'label'    => __( 'Number of Benefits', 'mytheme' ),
        'section'  => 'mytheme_benefits_section',
        'settings' => 'mytheme_benefits_count',
        'type'     => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10, // Set a maximum number of benefits
        ),
    ) );

    // Loop to add settings and controls for each benefit
    $benefits_count = get_theme_mod( 'mytheme_benefits_count', 'default' );
    for ( $i = 1; $i <= $benefits_count; $i++ ) {
        // Setting for benefit title
        $wp_customize->add_setting( "mytheme_benefit_{$i}_title", array(
            'default'           => "Benefit {$i} Title",
            'sanitize_callback' => 'sanitize_text_field',
        ) );

        // Control for benefit title
        $wp_customize->add_control( "mytheme_benefit_{$i}_title_control", array(
            'label'    => __( "Benefit {$i} Title", 'mytheme' ),
            'section'  => 'mytheme_benefits_section',
            'settings' => "mytheme_benefit_{$i}_title",
            'type'     => 'text',
        ) );

        // Setting for benefit text
        $wp_customize->add_setting( "mytheme_benefit_{$i}_text", array(
            'default'           => "Description for Benefit {$i}.",
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );

        // Control for benefit text
        $wp_customize->add_control( "mytheme_benefit_{$i}_text_control", array(
            'label'    => __( "Benefit {$i} Description", 'mytheme' ),
            'section'  => 'mytheme_benefits_section',
            'settings' => "mytheme_benefit_{$i}_text",
            'type'     => 'textarea',
        ) );
    }
}

function get_benefits_data() {
    $benefits_count = get_theme_mod( 'mytheme_benefits_count', 3 );
    
    $benefits = [];
    
    for ( $i = 1; $i <= $benefits_count; $i++ ) {
        $benefit_title = get_theme_mod( "mytheme_benefit_{$i}_title", "Benefit {$i} Title" );
        $benefit_text = get_theme_mod( "mytheme_benefit_{$i}_text", "Description for Benefit {$i}." );
        
        $benefits[] = [
            'title' => $benefit_title,
            'text'  => $benefit_text
        ];
    }
    
    return $benefits;
}
