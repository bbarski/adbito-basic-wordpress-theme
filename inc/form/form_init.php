<?php

require_once get_stylesheet_directory() . '/inc/helpers/validate_csv.php';


$csvFile = __DIR__ . '/' . 'form_config.csv'; $csvFileColumnsCount = 5;

if (!validateCSVFile($csvFile, $csvFileColumnsCount)) {
    $form_fields_config = [];
} else {
    $form_fields_config = convertCSVToFormConfigArray($csvFile);
}