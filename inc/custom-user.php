<?php
function add_customizer_post_author_role() {
    add_role(
        'customizer_post_author',
        'Manager',
        array(
            'read' => true,
            'edit_posts' => true,
            'publish_posts' => true,
            'upload_files' => true, // Dodano uprawnienie do wgrywania plików
            'customize' => true,
            'switch_themes' => true,
            'edit_theme_options' => true,
        )
    );
}
add_action('init', 'add_customizer_post_author_role');

function add_customizer_post_author_capabilities() {
    $role_object = get_role('customizer_post_author');
    if ($role_object) {
        $role_object->add_cap('read');
        $role_object->add_cap('edit_posts');
        $role_object->add_cap('publish_posts');
        $role_object->add_cap('upload_files'); // Dodano uprawnienie do wgrywania plików
        $role_object->add_cap('customize');
        $role_object->add_cap('switch_themes');
        $role_object->add_cap('edit_theme_options');
    }
}
add_action('init', 'add_customizer_post_author_capabilities');
?>