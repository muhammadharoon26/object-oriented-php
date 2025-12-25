<?php

/**
 * Simple Router class
 * Handles routing requests to controllers
 */
class Route
{
    private static array $routes = [];

    /**
     * Register a GET route
     */
    public static function get(string $uri, array $action): void
    {
        self::$routes['GET'][$uri] = $action;
    }

    /**
     * Register a POST route
     */
    public static function post(string $uri, array $action): void
    {
        self::$routes['POST'][$uri] = $action;
    }

    /**
     * Dispatch the request to the appropriate controller
     */
    public static function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset(self::$routes[$method][$uri])) {
            $action = self::$routes[$method][$uri];
            $controller = new $action[0]();
            $method = $action[1];
            echo $controller->$method();
        } else {
            http_response_code(404);
            echo "404 - Page Not Found";
        }
    }

    /**
     * Get all registered routes (for debugging)
     */
    public static function getRoutes(): array
    {
        return self::$routes;
    }
}
