<?php

require './App/Product.php';
require './App/ProductManager.php';

use App\Product;
use App\ProductManager;

$productManager = new ProductManager();

// Thêm sp
$productManager->addProduct(new Product(1, 'iPhone', 1000));
$productManager->addProduct(new Product(2, 'Samsung Galaxy', 900));

// Lấy danh sách sản phẩm
$products = $productManager->getProducts();
echo "Danh sách sản phẩm:<br>";
foreach ($products as $product) {
    echo $product->getName() . ' - $' . $product->getPrice() . "<br>";
}

// Lấy sp theo id
$product = $productManager->getProductById(1);
if ($product) {
    echo "<br>Sản phẩm với ID 1: " . $product->getName();
} else {
    echo "<br>Không tìm thấy sản phẩm";
}

// Xóa sp
$productManager->deleteProduct(2);
echo "<br><br>Sản phẩm sau khi xóa:<br>";
foreach ($productManager->getProducts() as $product) {
    echo $product->getName() . ' - $' . $product->getPrice() . "<br>";
}
