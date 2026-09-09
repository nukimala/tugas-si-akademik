<?php

require_once __DIR__. '/../app/Controllers/DashboardController.php';
require_once __DIR__. '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';

$routes = [
    'GET' => [
        '/dashboard' => ['DashboardController', 'index','AuthMiddleware'],
        '/login' => ['AuthController', 'index'],
        '/logout' => ['AuthController', 'logout'],
        '/' => ['MahasiswaController', 'index', 'AuthMiddleware'],
        '/mahasiswa' => ['MahasiswaController', 'index', 'AuthMiddleware'],
        '/mahasiswa/detail' => ['MahasiswaController', 'detail', 'AuthMiddleware'],
        '/mahasiswa/create' => ['MahasiswaController', 'create', 'AuthMiddleware'],
        '/dosen' => ['DosenController', 'index', 'AuthMiddleware'],
    ],
    'POST' => [
        '/login/process' => ['AuthController', 'process'],
    ],
];
?>