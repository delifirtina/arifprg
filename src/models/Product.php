<?php
class Product {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllProducts() {
        $query = 'SELECT * FROM products';
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Diğer ürün işlemleri için fonksiyonlar ekleyebilirsiniz.
}
