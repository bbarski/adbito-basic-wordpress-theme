<?php
// Ścieżka do pliku JSON
//$jsonFile = 'config.json';

// Odczytanie zawartości pliku
//$jsonContent = file_get_contents($jsonFile);

// Dekodowanie JSON do tablicy asocjacyjnej
//$customizerSectionsConfig = json_decode($jsonContent, true);

// Sprawdzenie, czy dekodowanie się powiodło
//if ($customizerSectionsConfig === null && json_last_error() !== JSON_ERROR_NONE) {
//    die('Błąd dekodowania JSON: ' . json_last_error_msg());
//}

// Teraz możesz używać danych z $customizerSectionsConfig
//print_r($customizerSectionsConfig);

$customizer_sections_config = [
	
		'mytheme_social_sharing_section' => [
        'title'    => 'Social Sharing',
        'priority' => 18,
        'settings' => [
			'theme_social_sharing'   => ['disable', 'Social Sharing', 'checkbox']

			]],
		'mytheme_header_section' => [
        'title'    => 'Theme Color Paletes',
        'priority' => 19,
        'settings' => [
			'theme_colors'   		=> ['outdoor-night', 'Theme colors', 'radio',
										 [
										  'evenement' => 'evenement',  
										  'outdoor-night' => 'outdoor-night',
										  'outdoor' => 'outdoor',
										  'dark' => 'dark',
										  'light' => 'light',
										  'retro-games' => 'retro-games',
										 ]
									   ],
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
			'hero_section_visibility' => ['disable', 'Hero section visibility', 'checkbox'],
            'hero_headline'    => ['Your headline goes here.', 'Custom Hero Headline Text', 'text'],
            'hero_subheadline' => ['Your subheadline goes here.', 'Custom Hero Subheadline Text', 'text'],
            'hero_cta_text'    => ['Your CTA text goes here.', 'Custom CTA Button Text', 'text'],
            'hero_cta_url'     => ['', 'Custom CTA Button URL', 'url'],
            'hero_image'       => ['', 'Hero Image', 'image'],
			'hero_image_border_radius'	=> ['8', 'Hero Image Border Radius', 'number'],
        ],
    ],
	
    'mytheme_products_section' => [
        'title'    => 'Products Section',
        'priority' => 22,
        'settings' => [
			'products_section_visibility' => ['enable', 'Products section visibility', 'checkbox'],
			'products_section_title' 	 => ['Products section title', 'Products Custom Title Text', 'text'],
            'products_p_1'    => ['Your paragraph text goes here.', 'Product 1 Custom Paragraph Text', 'textarea'],
            'products_cta_1_text'    => ['Your Product 1 CTA text goes here.', 'Product 1 Custom CTA Button Text', 'text'],
            'products_cta_1_url'     => ['', 'Product 1 Custom CTA URL', 'url'],
            'products_image_1'       => ['', 'Product 1 Image', 'image'],
			'product_image_1_position' => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'products_image_1_border_radius'	=> ['8', 'Product 1 Image Border Radius', 'number'],
			'products_p_2'    => ['Your paragraph text goes here.', 'Product 2 Custom Paragraph Text', 'textarea'],
            'products_cta_2_text'    => ['Your Product 2 CTA text goes here.', 'Product 2 Custom CTA Button Text', 'text'],
            'products_cta_2_url'     => ['', 'Product 2 Custom CTA URL', 'url'],
            'products_image_2'       => ['', 'Product 2 Image', 'image'],
			'product_image_2_position' => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'products_image_2_border_radius'	=> ['8', 'Product 2 Image Border Radius', 'number'],
			'products_p_3'    => ['Your paragraph text goes here.', 'Product 3 Custom Paragraph Text', 'textarea'],
            'products_cta_3_text'    => ['Your Product 3 CTA text goes here.', 'Product 3 Custom CTA Button Text', 'text'],
            'products_cta_3_url'     => ['', 'Product 3 Custom CTA URL', 'url'],
            'products_image_3'       => ['', 'Product 3 Image', 'image'],
			'product_image_3_position' => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'products_image_3_border_radius'	=> ['8', 'Product 3 Image Border Radius', 'number'],
			'products_p_4'    => ['Your paragraph text goes here.', 'Product 4 Custom Paragraph Text', 'textarea'],
            'products_cta_4_text'    => ['Your Product 4 CTA text goes here.', 'Product 4 Custom CTA Button Text', 'text'],
            'products_cta_4_url'     => ['', 'Product 4 Custom CTA URL', 'url'],
            'products_image_4'       => ['', 'Product 4 Image', 'image'],
			'product_image_4_position' => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'products_image_4_border_radius'	=> ['8', 'Product 4 Image Border Radius', 'number'],
			'products_p_5'    => ['Your paragraph text goes here.', 'Product 5 Custom Paragraph Text', 'textarea'],
            'products_cta_5_text'    => ['Your Product 5 CTA text goes here.', 'Product 5 Custom CTA Button Text', 'text'],
            'products_cta_5_url'     => ['', 'Product 5 Custom CTA URL', 'url'],
            'products_image_5'       => ['', 'Product 5 Image', 'image'],
			'product_image_5_position' => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'products_image_5_border_radius'	=> ['8', 'Product 5 Image Border Radius', 'number'],
			'products_p_6'    => ['Your paragraph text goes here.', 'Product 6 Custom Paragraph Text', 'textarea'],
            'products_cta_6_text'    => ['Your Product 6 CTA text goes here.', 'Product 6 Custom CTA Button Text', 'text'],
            'products_cta_6_url'     => ['', 'Product 6 Custom CTA URL', 'url'],
            'products_image_6'       => ['', 'Product 6 Image', 'image'],
			'product_image_6_position' => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'products_image_6_border_radius'	=> ['8', 'Product 6 Image Border Radius', 'number'],
        ],
    ],
	'mytheme_benefits_section' => [
        'title'    => 'Benefits Section',
		'priority' => 23,
        'settings' => [
        //'mytheme_benefits_count' => [3, 'Number of Benefits', 'number'],
        	'benefits_section_visibility' => ['enable', 'Benefits section visibility', 'checkbox'],
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
		'priority' => 24,
        'settings' => [
			'gallery_section_visibility' => ['enable', 'Gallery section visibility', 'checkbox'],
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
		'priority' => 25,
        'settings' => [
			'about_section_visibility' => ['enable', 'About section visibility', 'checkbox'],
        	'about_section_title' 	 	 => ['About Us section title', 'About Us Custom Title Text', 'text'],
			'about_image' 			     => ['About Us Image', 'About Us Image', 'image'],
			'about_image_position'       => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'about_text' 			     => ['About Us Text', 'About Us Text', 'textarea'],
		]
    ],
		'mytheme_services_section' => [
        'title'    => 'Services Section',
		'priority' => 26,
        'settings' => [
			'services_section_visibility' => ['enable', 'Services section visibility', 'checkbox'],
        	'services_section_title' 	 	 => ['Services section title', 'Services Custom Title Text', 'text'],
			'services_image' 			     => ['Services Image', 'Services Image', 'image'],
			'services_image_position'        => ['left', 'Image Position (Left or Right)', 'radio', ['left'  => 'Left', 'right' => 'Right',]],
			'services_text' 			     => ['Services Text', 'Services Text', 'textarea'],
		]
    ],
		'mytheme_testimonials_section' => [
        'title'    => 'Testimonials Section',
		'priority' => 27,
        'settings' => [
			'testimonials_section_visibility' => ['enable', 'Testimonials section visibility', 'checkbox'],
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
    ],
		'mytheme_contact_section' => [
        'title'    => 'Contact Section',
		'priority' => 28,
        'settings' => [
			'contact_section_visibility' => ['enable', 'Contact section visibility', 'checkbox'],
			'contact_container_content'  => ['cont_addr', 'Contact Section Content (Contact and Address or Just Contact)', 'radio', ['cont_addr'  => 'Contact & Address', 'cont' => 'Contact',]],
        	'contact_section_title' 	 => ['Contact section title', 'Contact Section Custom Title Text', 'text'],
			'contact_section_adress_line1' 	 => ['Contact section adress line 1', 'Contact section adress line 1 Text', 'text'],
			'contact_section_adress_line2' 	 => ['Contact section adress line 2', 'Contact section adress line 2 Text', 'text'],
			'contact_section_phn' 		 => ['123456789','Contact Section Phone Number','text'],
			'contact_section_phn_url' 		 => ['','Contact Section Phone Number URL','text'],
			'contact_section_mail' 		 => ['you@youmail.com','Contact Section Email Adress','text'],
			'contact_section_map_visibility' => ['enable', 'Contact section map visibility', 'checkbox'],
			'leaflet_map_shortcodes' 	 => ['[leaflet-map lat=52.34492251711576 lng=21.24164164066315 zoom=18][leaflet-marker lat=52.34475210731323 lng=21.241620182991028]', 'Leaflet Map Shortcodes', 'textarea'],
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
