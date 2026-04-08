<?php

function minify_css($css) {
    // Usunięcie białych znaków
    $css = preg_replace('/\s+/', ' ', $css);
    // Usunięcie komentarzy
    $css = preg_replace('/\/\*.*?\*\//', '', $css);
    // Usunięcie niepotrzebnych spacji
    $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);

    return $css;
}

function load_and_minify_css() {
    // Lista plików CSS do połączenia
    $css_files = array(
		get_stylesheet_directory_uri() . '/assets/css/header.css',
        get_stylesheet_directory_uri() . '/assets/css/main-page/front-page.css',
		get_stylesheet_directory_uri() . '/assets/css/main-page/hero.css',
		get_stylesheet_directory_uri() . '/assets/css/main-page/products.css',
        get_stylesheet_directory_uri() . '/assets/css/main-page/benefits.css',
        get_stylesheet_directory_uri() . '/assets/css/main-page/gallery.css',
        get_stylesheet_directory_uri() . '/assets/css/main-page/about.css',
        get_stylesheet_directory_uri() . '/assets/css/main-page/services.css',
		get_stylesheet_directory_uri() . '/assets/css/main-page/testimonials.css',
		get_stylesheet_directory_uri() . '/assets/css/main-page/contact.css',
        get_stylesheet_directory_uri() . '/assets/css/main-page/effects.css',		
		get_stylesheet_directory_uri() . '/assets/css/footer.css',
		get_stylesheet_directory_uri() . '/assets/css/blog/blog.css',
        get_stylesheet_directory_uri() . '/assets/css/blog/post.css',
		get_stylesheet_directory_uri() . '/assets/css/archive.css',
		get_stylesheet_directory_uri() . '/assets/css/social-bar.css',
		get_stylesheet_directory_uri() . '/style.css',

    	);

    $combined_css = '';

    foreach ($css_files as $file) {
        $combined_css .= file_get_contents($file);
    }

    $minified_css = minify_css($combined_css);
	
	$minified_file = get_stylesheet_directory() . '/style.min.css';
    file_put_contents($minified_file, $minified_css);
	
	return get_stylesheet_directory_uri() . '/style.min.css';

}

function enqueue_minified_css() {
    $minified_css_file = load_and_minify_css();
    wp_enqueue_style('minified-styles', $minified_css_file);
}

add_action('wp_enqueue_scripts', 'enqueue_minified_css');


?>
