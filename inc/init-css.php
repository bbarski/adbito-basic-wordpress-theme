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
    $css_files = array(
        '/assets/css/header.css',
        '/assets/css/main-page/front-page.css',
        '/assets/css/main-page/hero.css',
        '/assets/css/main-page/products.css',
        '/assets/css/main-page/benefits.css',
        '/assets/css/main-page/gallery.css',
        '/assets/css/main-page/about.css',
        '/assets/css/main-page/services.css',
        '/assets/css/main-page/testimonials.css',
        '/assets/css/main-page/contact.css',
        '/assets/css/main-page/effects.css',
        '/assets/css/footer.css',
        '/assets/css/blog/blog.css',
        '/assets/css/blog/post.css',
        '/assets/css/archive.css',
        '/assets/css/social-bar.css',
        '/style.css',
    );

    $combined_css = '';
    $theme_dir = get_stylesheet_directory();

    foreach ($css_files as $relative_path) {
        $path = $theme_dir . $relative_path;

        if (is_readable($path)) {
            $combined_css .= file_get_contents($path) . "\n";
        } else {
            error_log('Nie można odczytać pliku CSS: ' . $path);
        }
    }

    $minified_css = minify_css($combined_css);
    $minified_file = $theme_dir . '/style.min.css';

    if (file_put_contents($minified_file, $minified_css) === false) {
        error_log('Nie można zapisać pliku: ' . $minified_file);
        return false;
    }

    return get_stylesheet_directory_uri() . '/style.min.css';
}

function enqueue_minified_css() {
    $minified_css_url = load_and_minify_css();

    if ($minified_css_url) {
        wp_enqueue_style('minified-styles', $minified_css_url);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_minified_css');

?>
