<?php
function mytheme_customize_gallery($wp_customize) {

    $wp_customize->add_section('custom_gallery_section', array(
        'title'       => __('Front Page Gallery Section', 'yourtheme'),
        'description' => __('Upload images for the gallery.', 'yourtheme'),
        'priority'    => 28,
    ));

    // Add settings and controls for each image
    for ($i = 1; $i <= 3; $i++) {
        // Setting for the gallery image
        $wp_customize->add_setting("gallery_image_$i", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Control for the gallery image
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "gallery_image_$i",
            array(
                'label'    => __("Gallery Image $i", 'yourtheme'),
                'section'  => 'custom_gallery_section',
                'settings' => "gallery_image_$i",
            )
        ));
    }

    // Text Field: Gallery Section Title
    $wp_customize->add_setting('mytheme_gallery_title', array(
        'default'           => 'Gallery',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('mytheme_gallery_title_control', array(
        'label'    => __('Gallery Section Title', 'yourtheme'),
        'section'  => 'custom_gallery_section', // Fixed section reference
        'settings' => 'mytheme_gallery_title',
        'type'     => 'text',
    ));
}

function get_gallery_data() {
    return [
        'title' => get_theme_mod('mytheme_gallery_title', 'Gallery')
    ];
}
