<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürün Listesi</title>
    <!-- Stil dosyalarını buraya ekleyin -->
</head>
<body>
    <h1>Ürün Listesi</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Açıklama</th>
                <th>Fiyat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
               
