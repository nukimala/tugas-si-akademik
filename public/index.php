<?php
session_start();

require_once __DIR__ . '/../routes/web.php';
require_once __DIR__. '/../config/config.php';
require_once __DIR__. '/../app/Controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$base = '/si-akademik/public';
if (str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base)) ?: '/';

}

$method = $_SERVER['REQUEST_METHOD'];

if (isset($routes[$method][$uri])) {
    $routeinfo = $routes [$method] [$uri];
    $controllerName = $routeinfo[0];
    $action = $routeinfo [1];

    if (isset($routeinfo[2])) {
        $middlewareName = $routeinfo[2];
        require_once __DIR__. "/../app/Middleware/{$middlewareName}.php";
        $middleware = new $middlewareName();
        $middleware->handle();
    }
    $controller = new $controllerName();
    $controller->$action();
} else {
    echo "<h3>404 - halaman tidak ditemukan</h3>";
    
}
?>
