<?php

// Function to read form fields from CSV
function readFormFields($csvFile) {
    $fields = [];
    if (($handle = fopen($csvFile, "r")) !== FALSE) {
        $headers = fgetcsv($handle);
        while (($data = fgetcsv($handle)) !== FALSE) {
            $fields[] = array_combine($headers, $data);
        }
        fclose($handle);
    }
    return $fields;
}

// Function to generate HTML form
function generateForm($fields, $action = '', $method = 'post') {
    $form = '<form action="' . htmlspecialchars($action) . '" method="' . htmlspecialchars($method) . '">';

    foreach ($fields as $field) {
        $name = htmlspecialchars($field['field_name']);
        $type = htmlspecialchars($field['field_type']);
        $label = htmlspecialchars($field['label']);
        $required = isset($field['required']) && strtolower($field['required']) === 'true' ? 'required' : '';
        $options = isset($field['options']) ? explode(',', $field['options']) : [];

        $form .= '<div class="form-group">';
        $form .= '<label for="' . $name . '">' . $label . '</label>';

        switch ($type) {
            case 'text':
            case 'email':
            case 'password':
            case 'number':
                $form .= '<input type="' . $type . '" class="form-control" id="' . $name . '" name="' . $name . '" ' . $required . '>';
                break;

            case 'radio':
                foreach ($options as $option) {
                    $form .= '<div class="form-check">';
                    $form .= '<input class="form-check-input" type="radio" id="' . $name . '_' . sanitize($option) . '" name="' . $name . '" value="' . sanitize($option) . '" ' . $required . '>';
                    $form .= '<label class="form-check-label" for="' . $name . '_' . sanitize($option) . '">' . sanitize($option) . '</label>';
                    $form .= '</div>';
                }
                break;

            case 'select':
                $form .= '<select class="form-control" id="' . $name . '" name="' . $name . '" ' . $required . '>';
                foreach ($options as $option) {
                    $form .= '<option value="' . sanitize($option) . '">' . sanitize($option) . '</option>';
                }
                $form .= '</select>';
                break;

            case 'checkbox':
                $form .= '<div class="form-check">';
                $form .= '<input type="checkbox" class="form-check-input" id="' . $name . '" name="' . $name . '" value="1" ' . $required . '>';
                $form .= '<label class="form-check-label" for="' . $name . '">' . $label . '</label>';
                $form .= '</div>';
                break;

            case 'textarea':
                $form .= '<textarea class="form-control" id="' . $name . '" name="' . $name . '" rows="3" ' . $required . '></textarea>';
                break;
        }

        $form .= '</div>';
    }

    $form .= '<button type="submit" class="btn btn-primary">Submit</button>';
    $form .= '</form>';

    return $form;
}

// Helper function to sanitize input
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Main execution
$csvFile = 'form_fields.csv';
$formFields = readFormFields($csvFile);
$formHTML = generateForm($formFields, 'process_form.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Dynamic Form</h1>
        <?php echo $formHTML; ?>
    </div>
</body>
</html>
