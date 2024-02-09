<?php 
    include __DIR__.'/../classes/product.class.php';

    $productModel=new Product();

    $products=$productModel->getProducts();

?>