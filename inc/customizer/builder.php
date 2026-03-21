<?php

function mytheme_customize_sections_builder($wp_customize, $customizer_sections_config) {
    foreach ($customizer_sections_config as $section_id => $section_data) {
        $wp_customize->add_section($section_id, [
            'title'    => __($section_data['title'], 'mytheme'),
            'priority' => $section_data['priority'],
        ]);

        foreach ($section_data['settings'] as $setting => $setting_args) {
            $default = $setting_args[0];
            $label   = $setting_args[1];
            $type    = $setting_args[2];
            $choices = $setting_args[3] ?? null;

            $sanitize = match ($type) {
                'url'     => 'esc_url_raw',
                'textarea' => 'sanitize_textarea_field',
                default   => 'sanitize_text_field',
            };

            $wp_customize->add_setting($setting, [
                'default'           => $default,
                'sanitize_callback' => $sanitize,
                'transport'         => 'refresh',
            ]);

            if ($type === 'image') {
                $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting, [
                    'label'    => __($label, 'mytheme'),
                    'section'  => $section_id,
                ]));
            } else {
                $control_args = [
                    'label'    => __($label, 'mytheme'),
                    'section'  => $section_id,
                    'settings' => $setting,
                    'type'     => $type,
                ];

                if (in_array($type, ['radio', 'select']) && is_array($choices)) {
                    $control_args['choices'] = $choices;
                }

                $wp_customize->add_control("{$setting}_control", $control_args);
            }
        }
    }
}



function get_section_data($customizer_sections_config) {

    $section_data = [];

    foreach ($customizer_sections_config as $section_id => $section) {
        foreach ($section['settings'] as $setting => $setting_args) {
            $default = $setting_args[0] ?? '';
            $value   = get_theme_mod($setting, '');

            $section_data[$setting] = $value !== '' ? $value : $default;
        }
    }

    return $section_data;
}

