<?php
function mytheme_customize_general($wp_customize) {
	
$wp_customize->add_setting( 'next_post_label', array(
	'default' => __( 'Next Post', 'your-textdomain' ),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'next_post_label_control', array(
	'label'       => __( 'Next Post Label', 'your-textdomain' ),
    'section'     => 'title_tagline',
    'settings'    => 'next_post_label',
    'type'        => 'text',
    ) );
	
}