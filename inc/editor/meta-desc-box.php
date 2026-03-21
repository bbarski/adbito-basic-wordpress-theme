<?php
/**
 * Add metabox in WP backend for sites and posts meta description
 */

function register_meta_description_metabox() {
    $screens = ['post', 'page'];
    foreach ($screens as $screen) {
        add_meta_box(
            'meta_description_box',
            'Meta Description',
            'render_meta_description_metabox',
            $screen,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'register_meta_description_metabox');


function render_meta_description_metabox($post) {
	
    $meta_description = get_post_meta($post->ID, '_meta_description', true);
	
    echo '<label for="meta_description">Meta Description:</label>';
    echo '<textarea id="meta_description" name="meta_description" 
			style="width:100%;" rows="4">' . esc_attr($meta_description) . '</textarea>';
    
	wp_nonce_field('save_meta_description', 'meta_description_nonce');
}


function save_meta_description($post_id) {
    if (!isset($_POST['meta_description_nonce']) || !wp_verify_nonce($_POST['meta_description_nonce'], 'save_meta_description')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['meta_description'])) {
        update_post_meta($post_id, '_meta_description', sanitize_textarea_field($_POST['meta_description']));
    }
}
add_action('save_post', 'save_meta_description');


function add_meta_description_to_head() {
    if (is_singular()) {
        global $post;
        $meta_description = get_post_meta($post->ID, '_meta_description', true);
        if (!empty($meta_description)) {
            echo '<meta name="description" content="' . esc_attr($meta_description) . '">';
        }
    }
}
add_action('wp_head', 'add_meta_description_to_head');
