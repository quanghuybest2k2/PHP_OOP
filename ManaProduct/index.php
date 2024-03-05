<?php

require './App/Product.php';
require './App/ProductManager.php';

use App\Product;
use App\ProductManager;

$productManager = new ProductManager();

$productList = [
    [
        'name' => 'Iphone',
        'price' => 20000000
    ],
    [
        'name' => 'Samsung Galaxy',
        'price' => 12000000
    ],
    [
        'name' => 'Vivo Y20s',
        'price' => 15000000
    ]
];


// Thêm sp test
// $productManager->addProduct(new Product(1, 'IPhone', 20000000));
// $productManager->addProduct(new Product(2, 'Samsung Galaxy', 12000000));

// Thêm sp
$index = 1;
foreach ($productList as $item) {
    $productManager->addProduct(new Product($index, $item['name'], $item['price']));
    // print($id);
    $index++;
}

// Lấy danh sách sản phẩm
echo "Danh sách sản phẩm:<br>";
$products = $productManager->getProducts();
// Lấy sp theo id
$id = 2;
$product = $productManager->getProductById($id);
if ($product) {
    echo "<br/>Sản phẩm với Id $id: " . $product->getName();
} else {
    echo "<br/>Không tìm thấy sản phẩm";
}

// Xóa sp
$productManager->deleteProduct(2);
echo "<br><br>Sản phẩm sau khi xóa:<br>";
$products = $productManager->getProducts();
