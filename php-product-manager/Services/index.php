<?php
include_once 'C:\xampp\htdocs\php-product-manager\Models\Product.php';
include_once 'C:\xampp\htdocs\php-product-manager\Services\ProductManager.php';

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . "<br/>";
}
