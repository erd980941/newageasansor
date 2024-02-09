<?php
session_start();
require_once __DIR__ . '/../_classes/product.class.php';
require_once __DIR__ . '/fonksiyon.php';

if (!isset($_SESSION['username']) || $_SESSION['adminLoggedIn'] !== true) {
    header('Location: ../pages/login');
    exit;
}

$productModel = new Product();

if (isset($_POST['add_product'])) {


    $uploadDirectory = "../../assets/img/products/";
    $fileExtension = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
    $uploadedFile = $_FILES['product_image']['tmp_name'];
    $allowedExtensions = ['jpg', 'jpeg', 'png'];

    $newFileName = seo($_POST['product_name']) . "_" . date("Y-m-d_His") . "." . $fileExtension;

    if (!in_array($fileExtension, $allowedExtensions)) {
        header("Location:../pages/product-list?error=invalid_extension");
        exit();
    }

    $targetFile = $uploadDirectory . $newFileName;
    $isUploaded = move_uploaded_file($uploadedFile, $targetFile);

    if (!$isUploaded) {
        header("Location:../pages/product-list?error=true");
        exit();
    } else {

        $productData = array(
            'product_name' => $_POST['product_name'],
            'product_short_description' => $_POST['product_short_description'],
            'product_description' => $_POST['product_description'],
            'product_url' => seo($_POST['product_name']),
            'product_image' => $newFileName,
        );

        $result = $productModel->addProduct($productData);

        if ($result) {
            header("Location:../pages/product-list?success=true");
            exit();
        } else {
            header("Location:../pages/product-list?error=true");
            exit();
        }

    }


} else if (isset($_POST['edit_product'])) {


    if (!empty($_FILES['product_image']['name'])) {
        $uploadDirectory = "../../assets/img/products/";
        $fileExtension = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
        $uploadedFile = $_FILES['product_image']['tmp_name'];
        $allowedExtensions = ['jpg', 'jpeg', 'png'];

        $newFileName = seo($_POST['product_name']) . "_" . date("Y-m-d_His") . "." . $fileExtension;

        if (!in_array($fileExtension, $allowedExtensions)) {
            header("Location:../pages/product-list?error=invalid_extension");
            exit();
        }

        $targetFile = $uploadDirectory . $newFileName;
        $isUploaded = move_uploaded_file($uploadedFile, $targetFile);

        if ($isUploaded) {
            $product = $productModel->getProductById($_POST['product_id']);
            unlink("../../assets/img/products/" . $product['product_image']);
            $resultImage = $productModel->updateProductPhoto($_POST['product_id'],$newFileName);
        }

    }

    $productData = array(
        'product_id' => $_POST['product_id'],
        'product_name' => $_POST['product_name'],
        'product_short_description' => $_POST['product_short_description'],
        'product_description' => $_POST['product_description'],
        'product_url' => seo($_POST['product_name']),
    );

    $result = $productModel->updateProduct($productData);

    if ($result) {
        header("Location:../pages/product-list?success=true");
        exit();
    } else {
        header("Location:../pages/product-list?error=true");
        exit();
    }
} else if (isset($_GET['product_id']) && $_GET['delete'] == 'true') {
    $productId = htmlspecialchars($_GET['product_id']);
    $product=$productModel->getProductById($productId);
    $result = $productModel->deleteProduct($productId);
    if ($result) {
        unlink("../../assets/img/products/" . $product['product_image']);

        header("Location:../pages/product-list?success=true");
        exit();
    } else {
        header("Location:../pages/product-list?error=true");
        exit();
    }
} else {
    header("Location:../pages/product-list");
    exit();
}


?>