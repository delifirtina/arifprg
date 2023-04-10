<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürün Ekle</title>
</head>
<body>
    <h1>Ürün Ekle</h1>
    <form action="src/controllers/products_controller.php" method="post">
        <label for="product_name">Ürün Adı:</label>
        <input type="text" name="product_name" id="product_name" required>
        <br>
        <label for="price">Fiyat:</label>
        <input type="number" name="price" id="price" required>
        <br>
        <label for="quantity">Miktar:</label>
        <input type="number" name="quantity" id="quantity" required>
        <br>
        <input type="hidden" name="action" value="add_product">
        <input type="submit" value="Ürün Ekle">
    </form>
</body>
</html>
