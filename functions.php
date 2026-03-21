<?php
// This is functions.php for the child theme for Starter Theme.

define('CREATOR_LINK', 'https://adbito.pl');
define('CREATOR_NAME', 'ADBITO.PL');
define('CONTACT_PHN_LINK', 'tel:+48511540671');
define('CONTACT_PHN_DISPLAY', '+48 511 540 671');


add_action('wp_enqueue_scripts', 'child_starter_theme_enqueue_scripts');
function child_starter_theme_enqueue_scripts() {
    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', [], null, true);
}

add_action('wp_head', 'custom_meta_tags', 1);
function custom_meta_tags() {
    ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3b3b2e" id="theme-color-meta">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">    
<?php } ?>
<?php

function get_data_for_template($template_name) {
    global $customizer_sections_config;
    $section_data = get_section_data(["mytheme_{$template_name}_section" => 		  $customizer_sections_config["mytheme_{$template_name}_section"]]);

    return $section_data;
}


add_action('customize_controls_enqueue_scripts', 'mytheme_enqueue_customizer_js');
function mytheme_enqueue_customizer_js() {
    wp_enqueue_script(
        'mytheme-customizer-js',
        get_stylesheet_directory_uri() . '/assets/js/customizer.js',
        ['customize-controls'],
        false,
        true
    );
}

function get_social_share_links() {
    $permalink = get_permalink();
    return [
        'facebook' => 'https://facebook.com/sharer.php?u=' . $permalink,
        'x-twitter'  => 'https://twitter.com/intent/tweet?url=' . $permalink,
		'whatsapp' => 'https://api.whatsapp.com/send?text=' . $permalink,
		'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url=' . $permalink,
		'pinterest' => 'http://pinterest.com/pin/create/button/?url=' . $permalink,
	];
}

add_action('wp_footer', 'floating_social_bar');
function floating_social_bar() {
    if (get_theme_mod('theme_social_sharing', false)) {
        get_template_part('components/elements/social-sharing-bar');
    }
}


require_once get_stylesheet_directory() . '/inc/editor/meta-desc-box.php';
require_once get_stylesheet_directory() . '/inc/init-css.php';
require_once get_stylesheet_directory() . '/inc/mock-img.php';
require_once get_stylesheet_directory() . '/inc/customizer/builder.php';
require_once get_stylesheet_directory() . '/inc/customizer/init.php';
