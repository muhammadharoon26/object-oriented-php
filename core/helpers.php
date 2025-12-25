<?php

/**
 * Helper function to render a view
 *
 * @param string $view The view name (without .blade.php extension)
 * @param array $data Data to pass to the view
 * @return string Rendered HTML content
 */
function view(string $view, array $data = []): string
{
    // Extract data array to variables
    extract($data);

    // Build the view file path
    $viewPath = __DIR__ . '/../resources/views/' . $view . '.blade.php';

    if (!file_exists($viewPath)) {
        throw new Exception("View '{$view}' not found at {$viewPath}");
    }

    // Start output buffering
    ob_start();

    // Include the view file
    include $viewPath;

    // Get the buffered content and clean the buffer
    return ob_get_clean();
}
