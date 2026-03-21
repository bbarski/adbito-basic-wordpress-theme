<?php

// $customizer_enabled_sections = [
//     'header'       => true,
//     'hero'         => false,
//     'benefits'     => true,
//     'gallery'      => true,
//     'about'        => true,
//     'services'     => true,
//     'testimonials' => true,
//     'colors'       => true,
//     'general'      => true,
// ];

$customizer_sections_config = [
	
		'mytheme_social_sharing_section' => [
        'title'    => 'Social Sharing',
        'priority' => 18,
        'settings' => [
			'theme_social_sharing'   => ['enable', 'Social Sharing', 'checkbox']

			]],
		'mytheme_header_section' => [
        'title'    => 'Theme Colors',
        'priority' => 19,
        'settings' => [
			'theme_colors'   => ['outdoor-night', 'Theme colors', 'radio',
										 ['outdoor-night'  => 'outdoor-night',
										  'outdoor' => 'outdoor',
										  'dark' => 'dark',
										  'light' => 'light',
										  'retro-games' => 'retro-games',
			]],
        ],
    ],
	    'mytheme_custom_logo' => [
        'title'    => 'Header Logo',
        'priority' => 20,
        'settings' => [
            'mytheme_custom_logo'    => ['default_logo_url', 'Custom Header Logo', 'image'],
        ],
    ],
    'mytheme_hero_section' => [
        'title'    => 'Hero Section',
        'priority' => 21,
        'settings' => [
            'hero_headline'    => ['Your headline goes here.', 'Custom Hero Headline Text', 'text'],
            'hero_subheadline' => ['Your subheadline goes here.', 'Custom Hero Subheadline Text', 'text'],
            'hero_cta_text'    => ['Your CTA text goes here.', 'Custom CTA Button Text', 'text'],
            'hero_cta_url'     => ['', 'Custom CTA Button URL', 'url'],
            'hero_image'       => ['', 'Hero Image', 'image'],
        ],
    ],
	'mytheme_benefits_section' => [
        'title'    => 'Benefits Section',
		'priority' => 22,
        'settings' => [
        //'mytheme_benefits_count' => [3, 'Number of Benefits', 'number'],
        	'benefits_section_title' 	 => ['Benefits section title', 'Benefits Custom Title Text', 'text'],
			'benefit_1_title' 			 => ['Benefit 1 Title', 'Benefit 1 Title', 'text'],
			'benefit_1_text' 			 => ['Benefit 1 Text', 'Benefit 1 Text', 'textarea'],
			'benefit_2_title' 			 => ['Benefit 2 Title', 'Benefit 2 Title', 'text'],
			'benefit_2_text' 			 => ['Benefit 2 Text', 'Benefit 2 Text', 'textarea'],
			'benefit_3_title' 			 => ['Benefit 3 Title', 'Benefit 3 Title', 'text'],
			'benefit_3_text' 			 => ['Benefit 3 Text', 'Benefit 3 Text', 'textarea'],
		]
    ],
		'mytheme_gallery_section' => [
        'title'    => 'Front Page Gallery Section',
		'priority' => 23,
        'settings' => [
        	'gallery_section_title' 	 => ['Front Page Gallery section title', 'Front Page Gallery Custom Title Text', 'text'],
			'gallery_1_image' 			 => ['Gallery 1 Image', 'Gallery 1 Image', 'image'],
			'gallery_2_image' 			 => ['Gallery 2 Image', 'Gallery 2 Image', 'image'],
			'gallery_3_image' 			 => ['Gallery 3 Image', 'Gallery 3 Image', 'image'],
			'gallery_4_image' 			 => ['Gallery 4 Image', 'Gallery 4 Image', 'image'],
			'gallery_5_image' 			 => ['Gallery 5 Image', 'Gallery 5 Image', 'image'],
			'gallery_6_image' 			 => ['Gallery 6 Image', 'Gallery 6 Image', 'image'],
			'gallery_7_image' 			 => ['Gallery 7 Image', 'Gallery 7 Image', 'image'],
			'gallery_8_image' 			 => ['Gallery 8 Image', 'Gallery 8 Image', 'image'],
			'gallery_9_image' 			 => ['Gallery 9 Image', 'Gallery 9 Image', 'image'],
			'gallery_10_image' 			 => ['Gallery 10 Image', 'Gallery 10 Image', 'image'],
		]
    ],
		'mytheme_about_section' => [
        'title'    => 'About Us Section',
		'priority' => 24,
        'settings' => [
        	'about_section_title' 	 	 => ['About Us section title', 'About Us Custom Title Text', 'text'],
			'about_image' 			     => ['About Us Image', 'About Us Image', 'image'],
			'about_image_position'       => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'about_text' 			     => ['About Us Text', 'About Us Text', 'textarea'],
		]
    ],
		'mytheme_services_section' => [
        'title'    => 'Services Section',
		'priority' => 25,
        'settings' => [
        	'services_section_title' 	 	 => ['Services section title', 'Services Custom Title Text', 'text'],
			'services_image' 			     => ['Services Image', 'Services Image', 'image'],
			'services_image_position'        => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'services_text' 			     => ['Services Text', 'Services Text', 'textarea'],
		]
    ],
		'mytheme_testimonials_section' => [
        'title'    => 'Testimonials Section',
		'priority' => 26,
        'settings' => [
        	'testimonials_section_title' 	 => ['Testimonials section title', 'Testimonials Custom Title Text', 'text'],
			'testimonials_image_1' 			 => ['Testimonials Image 1', 'Testimonials Image', 'image'],
			'testimonials_text_1' 			 => ['Testimonials Text 1', 'Testimonials Text', 'textarea'],
			'testimonials_name_1' 			 => ['Testimonials Name 1', 'Testimonials Name', 'text'],
			'testimonials_image_2' 			 => ['Testimonials Image 2', 'Testimonials Image', 'image'],
			'testimonials_text_2' 			 => ['Testimonials Text 2', 'Testimonials Text', 'textarea'],
			'testimonials_name_2' 			 => ['Testimonials Name 2', 'Testimonials Name', 'text'],
			'testimonials_image_3' 			 => ['Testimonials Image 3', 'Testimonials Image', 'image'],
			'testimonials_text_3' 			 => ['Testimonials Text 3', 'Testimonials Text', 'textarea'],
			'testimonials_name_3' 			 => ['Testimonials Name 3', 'Testimonials Name', 'text'],
			'testimonials_image_4' 			 => ['Testimonials Image 4', 'Testimonials Image', 'image'],
			'testimonials_text_4' 			 => ['Testimonials Text 4', 'Testimonials Text', 'textarea'],
			'testimonials_name_4' 			 => ['Testimonials Name 4', 'Testimonials Name', 'text'],
		]
    ]
];



// foreach ($customizer_enabled_sections as $customizer_enabled_section => $enabled) {
//     if ($enabled) {
//         require_once get_stylesheet_directory() . "/inc/customizer/{$customizer_enabled_section}.php";
//     }
// }

add_action('customize_register', function($wp_customize) use ( $customizer_sections_config ) {
    //foreach ($customizer_enabled_sections as $customizer_enabled_section => $enabled) {

	$function_name = "mytheme_customize_sections_builder";
	
        if ( function_exists($function_name)) {
                $function_name($wp_customize, $customizer_sections_config);
        }
    //}
});
