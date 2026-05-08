<?php
/**
 * Convert CSV config file to config array.
 *
 * @param string $csvFile Path to CSV file.
 * @return array Config array.
 */
function convertCSVToConfigArray(string $csvFile): array
{
    $customizer_sections_config = [];
    $handle = fopen($csvFile, "r");
    fgetcsv($handle); // skip csv header

    while (($data = fgetcsv($handle)) !== FALSE) {
        if (count($data) < 7) {
            continue; // skip incomplet lines
        }

        $sectionKey = trim($data[0] ?? '');
        $title = trim($data[1] ?? '');
        $priority = (int)trim($data[2] ?? 0);
        $settingKey = trim($data[3] ?? '');
        $defaultValue = trim($data[4] ?? '');
        $settingLabel = trim($data[5] ?? '');
        $settingType = trim($data[6] ?? '');
        $settingOptionsRaw = trim($data[7] ?? '');
        $settingOptions = !empty($settingOptionsRaw) ? json_decode($settingOptionsRaw, true) : null;

        $setting = [$defaultValue, $settingLabel, $settingType];
        if ($settingOptions !== null) {
            $setting[] = $settingOptions;
        }

        if (!isset($customizer_sections_config[$sectionKey])) {
            $customizer_sections_config[$sectionKey] = [
                'title' => $title,
                'priority' => $priority,
                'settings' => [],
            ];
        }

        $customizer_sections_config[$sectionKey]['settings'][$settingKey] = $setting;
    }

    fclose($handle);
    return $customizer_sections_config;
}