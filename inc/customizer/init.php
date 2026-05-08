<?php

require_once get_stylesheet_directory() . '/inc/helpers/json_to_customizer_config.php';

$jsonFile = __DIR__ . '/' . 'config.json';

$customizer_sections_config = convertJsonToConfigArray($jsonFile);


add_action('customize_register', function($wp_customize) use ( $customizer_sections_config ) {
	
	$function_name = "mytheme_customize_sections_builder";
	
        if ( function_exists($function_name)) {
                $function_name($wp_customize, $customizer_sections_config);
        }

});
