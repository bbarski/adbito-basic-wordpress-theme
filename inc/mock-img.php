<?php
// Tworzy obraz z opcjonalnymi parametrami szerokości i wysokości
function create_mock_image($width = 1920, $height = 1080) {
    if (!function_exists('imagecreatetruecolor')) {
        return new WP_Error('gd_missing', 'Biblioteka GD nie jest dostępna.');
    }

    $image = imagecreatetruecolor($width, $height);
    if (!$image) {
        return new WP_Error('image_creation_failed', 'Nie udało się utworzyć obrazu.');
    }

    $bg_color = imagecolorallocate($image, 255, 255, 153); // #FFFF99
    imagefill($image, 0, 0, $bg_color);

    // Rysowanie krzyża
    $line_color = imagecolorallocate($image, 0, 0, 0);
    imageline($image, 0, 0, $width, $height, $line_color);
    imageline($image, $width, 0, 0, $height, $line_color);

    return $image;
}

// Zapisuje obraz do uploads i dodaje do mediów
function save_mock_image($width = 1920, $height = 1080) {
    $upload_dir = wp_upload_dir();
    $file_name = "mock-image-{$width}x{$height}.jpg";
    $file_path = $upload_dir['path'] . '/' . $file_name;
    $file_url = $upload_dir['url'] . '/' . $file_name;

    if (!file_exists($file_path)) {
        if (!wp_is_writable($upload_dir['path'])) {
            return new WP_Error('dir_not_writable', 'Katalog uploads nie ma uprawnień do zapisu.');
        }

        $image = create_mock_image($width, $height);
        if (is_wp_error($image)) {
            return $image;
        }

        if (!imagejpeg($image, $file_path, 90)) {
            imagedestroy($image);
            return new WP_Error('image_save_failed', 'Nie udało się zapisać obrazu.');
        }

        imagedestroy($image);

        $attachment_id = wp_insert_attachment([
            'guid' => $file_url,
            'post_mime_type' => 'image/jpeg',
            'post_title' => "Mock Image {$width}x{$height}",
            'post_content' => '',
            'post_status' => 'inherit',
        ], $file_path);

        if (!is_wp_error($attachment_id)) {
            require_once ABSPATH . 'wp-admin/includes/image.php';
            wp_update_attachment_metadata($attachment_id, wp_generate_attachment_metadata($attachment_id, $file_path));
        }
    }

    return $file_url;
}

// echo save_mock_image(800, 600);
