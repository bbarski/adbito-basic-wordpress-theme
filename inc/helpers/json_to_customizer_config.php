<?php
/**
 * Convert JSON config file to config array (compatible with original CSV structure).
 *
 * @param string $jsonFile Path to JSON file.
 * @return array Config array in the format: [section_key => ['title' => ..., 'priority' => ..., 'settings' => [...]]]
 * @throws InvalidArgumentException If the file is invalid or JSON is malformed.
 */
function convertJsonToConfigArray(string $jsonFile): array
{
    // Read and decode JSON
    $jsonContent = file_get_contents($jsonFile);
    if ($jsonContent === false) {
        throw new InvalidArgumentException("Failed to read the file: $jsonFile");
    }

    $jsonData = json_decode($jsonContent, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new InvalidArgumentException("Invalid JSON: " . json_last_error_msg());
    }

    $config = [];

    foreach ($jsonData as $sectionKey => $section) {
        // Validate section structure
        if (!isset($section['title'], $section['priority'], $section['settings'])) {
            throw new InvalidArgumentException("Invalid section structure for: $sectionKey");
        }

        $title = $section['title'];
        $priority = (int)$section['priority'];
        $settings = [];

        foreach ($section['settings'] as $settingKey => $setting) {
            // Validate setting structure (must have at least: default_value, label, type)
            if (count($setting) < 3) {
                throw new InvalidArgumentException("Invalid setting structure for: $settingKey in section $sectionKey");
            }

            $defaultValue = $setting[0] ?? '';
            $settingLabel = $setting[1] ?? '';
            $settingType = $setting[2] ?? '';
            $settingOptions = null;

            // If 4th element exists, treat it as options (for radio/select fields)
            if (isset($setting[3])) {
                $settingOptions = $setting[3];
            }

            // Build the setting array
            $settingArray = [$defaultValue, $settingLabel, $settingType];
            if ($settingOptions !== null) {
                $settingArray[] = $settingOptions;
            }

            $settings[$settingKey] = $settingArray;
        }

        $config[$sectionKey] = [
            'title' => $title,
            'priority' => $priority,
            'settings' => $settings,
        ];
    }

    return $config;
}