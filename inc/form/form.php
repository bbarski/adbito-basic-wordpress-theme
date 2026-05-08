<?php
class WP_Form {
    private $fields = [];
    private $action = '';
    private $method = 'post';
    private $nonce_action = 'wp_form_nonce';

    public function __construct($action = '', $method = 'post') {
        $this->action = $action;
        $this->method = $method;
    }

    public function add_field($name, $type, $label, $required = false, $options = []) {
        $this->fields[] = [
            'name' => $name,
            'type' => $type,
            'label' => $label,
            'required' => $required,
            'options' => $options,
        ];
    }

    public function render() {
        $form = '<form action="' . esc_url($this->action) . '" method="' . esc_attr($this->method) . '">';

        // nonce for security
        $form .= wp_nonce_field($this->nonce_action, 'wp_form_nonce', true, false);

        foreach ($this->fields as $field) {
            $form .= $this->render_field($field);
        }

        $form .= '<button type="submit" class="button">' . __('Submit', 'text-domain') . '</button>';
        $form .= '</form>';

        return $form;
    }

    private function render_field($field) {
        $output = '<div class="form-group">';

        // Label
        $output .= '<label for="' . esc_attr($field['name']) . '">' . esc_html($field['label']) . '</label>';

        // form field
        switch ($field['type']) {
            case 'text':
            case 'email':
                $output .= '<input type="' . esc_attr($field['type']) . '" name="' . esc_attr($field['name']) . '" id="' . esc_attr($field['name']) . '" ' .
                           ($field['required'] ? 'required' : '') . '>';
                break;

            case 'select':
                $output .= '<select name="' . esc_attr($field['name']) . '" id="' . esc_attr($field['name']) . '" ' .
                           ($field['required'] ? 'required' : '') . '>';
                foreach ($field['options'] as $option) {
                    $output .= '<option value="' . esc_attr($option) . '">' . esc_html($option) . '</option>';
                }
                $output .= '</select>';
                break;

            case 'radio':
                foreach ($field['options'] as $option) {
                    $output .= '<div class="radio-option">';
                    $output .= '<input type="radio" name="' . esc_attr($field['name']) . '" id="' . esc_attr($field['name'] . '_' . sanitize_title($option)) . '" value="' . esc_attr($option) . '" ' .
                               ($field['required'] ? 'required' : '') . '>';
                    $output .= '<label for="' . esc_attr($field['name'] . '_' . sanitize_title($option)) . '">' . esc_html($option) . '</label>';
                    $output .= '</div>';
                }
                break;

            case 'checkbox':
                $output .= '<input type="checkbox" name="' . esc_attr($field['name']) . '" id="' . esc_attr($field['name']) . '" value="1" ' .
                           ($field['required'] ? 'required' : '') . '>';
                break;

            case 'textarea':
                $output .= '<textarea name="' . esc_attr($field['name']) . '" id="' . esc_attr($field['name']) . '" ' .
                           ($field['required'] ? 'required' : '') . '></textarea>';
                break;
        }

        $output .= '</div>';
        return $output;
    }

    public function process_submission() {
        if (!isset($_POST['wp_form_nonce']) || !wp_verify_nonce($_POST['wp_form_nonce'], $this->nonce_action)) {
            wp_die('Invalid nonce');
        }

        $data = [];
        foreach ($this->fields as $field) {
            if (isset($_POST[$field['name']])) {
                $data[$field['name']] = sanitize_text_field($_POST[$field['name']]);
            }
        }

        return $data;
    }
}
