<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/product.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    header('Location: ../../index.php');
    exit;
}

switch ($action) {
    case 'add_product':
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $result = add_product($pdo, $product_name, $price, $quantity);

        if ($result) {
            header('Location: ../../src/views/add_product.php?status=success');
        } else {
            header('Location: ../../src/views/add_product.php?status=error');
        }
        break;

    // Daha fazla işlem eklemek için buraya yeni case blokları eklenebilir.
    default:
        header('Location: ../../index.php');
        break;
}
