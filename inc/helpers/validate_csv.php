<?php
/**
 * Validate CSV files and log errors to console.
 *
 * @param string $csvFile Path to CSV file.
 * @return bool True, if file is correct, False in other case.
 */
function validateCSVFile(string $csvFile, int $columnsCount): bool
{
    $errors = [];

	if (!file_exists($csvFile)) {
        $errors[] = "No CSV file in given path: $csvFile";
    }
    elseif (!is_readable($csvFile)) {
        $errors[] = "CSV file is not readable: $csvFile";
    }
    elseif (($handle = fopen($csvFile, "r")) === FALSE) {
        $errors[] = "Can not open CSV file: $csvFile";
    }
    else {
        $header = fgetcsv($handle);
        if ($header === FALSE) {
            $errors[] = "CSV file is empty or damage.";
        } elseif (count($header) < $columnsCount) {
            $errors[] = "CSV Header got wrong columns count. Expect " . $columnsCount . " got: " . count($header);
        }
        fclose($handle);
    }


    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<script>console.error('" . addslashes($error) . "');</script>";
        }
        return false;
    }

    return true;
}