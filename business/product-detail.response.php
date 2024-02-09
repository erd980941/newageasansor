<?php 
    include __DIR__.'/../classes/product.class.php';

    $productModel=new Product();

    $productUrl=htmlspecialchars($_GET['product_url']);


    $product=$productModel->getProductByUrl($productUrl);

    
?>