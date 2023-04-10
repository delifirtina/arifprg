<?php
require_once __DIR__ . '/src/config/database.php';

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request_uri) {
    case '/':
        echo "Ana sayfa";
        break;

    // Daha fazla route ekleyebilirsiniz
    case '/products':
        require 'src/controllers/products_controller.php';
        break;

    default:
        header('HTTP/1.1 404 Not Found');
        echo "404 Sayfa Bulunamadı";
        break;
}
