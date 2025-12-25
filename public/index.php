<?php

/**
 * Application Entry Point
 * All requests are routed through this file
 */

// Define the base path
define('BASE_PATH', dirname(__DIR__));

// Load core files
require_once BASE_PATH . '/core/helpers.php';
require_once BASE_PATH . '/core/Route.php';

// Autoload controllers
spl_autoload_register(function ($class) {
    // Convert namespace separators to directory separators
    $path = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';

    // Convert App to app (lowercase)
    $path = str_replace('/App/', '/app/', $path);
    $path = str_replace('/Http/', '/http/', $path);

    if (file_exists($path)) {
        require_once $path;
    }
});

// Load routes
require_once BASE_PATH . '/routes/web.php';

// Dispatch the request
Route::dispatch();
