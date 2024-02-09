<?php 
    include __DIR__.'/../classes/our-reference.class.php';

    $ourReferenceModel=new OurReference();

    $ourReferences=$ourReferenceModel->getGalleryItems();

?>