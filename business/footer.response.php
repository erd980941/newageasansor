<?php 
    include __DIR__.'/../classes/footer.class.php';

    $footerModel=new Footer();

    $productsFooter=$footerModel->getProducts();

    $socialMediaFooter=$footerModel->getSocialMedia();


?>