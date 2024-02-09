<?php
session_start();
require_once __DIR__.'/../_classes/our-reference.class.php';

if (!isset($_SESSION['username']) || $_SESSION['adminLoggedIn'] !== true) {
    header('Location: ../pages/login');
    exit;
}

$ourReferenceModel = new OurReference();

if (isset($_POST['add_our_reference'])) {
    $uploadDirectory = "../../assets/img/our-reference/";
    $fileExtension = pathinfo($_FILES['reference_image']['name'], PATHINFO_EXTENSION);
    $uploadedFile = $_FILES['reference_image']['tmp_name'];
    $allowedExtensions = ['jpg', 'jpeg', 'png'];

    $newFileName = "our-reference" . "_" . date("YmdHis");

    if (!in_array($fileExtension, $allowedExtensions)) {
        header("Location:../pages/our-reference-list?error=invalid_extension");
        exit();
    }

    $targetFile = $uploadDirectory . $newFileName . '.' . $fileExtension;
    $isUploaded = move_uploaded_file($uploadedFile, $targetFile);

    if (!$isUploaded) {
        $result = false;
        goto x;
    }

    $ourReferenceData = [
        'reference_image' => $newFileName . '.' . $fileExtension,
        'reference_name' => $_POST['reference_name'],
        'reference_description' => $_POST['reference_description'],
    ];

    $result = $ourReferenceModel->addOurReference($ourReferenceData);

    x:

    if ($result) {
        header("Location:../pages/our-reference-list?success=true");
        exit();
    } else {
        header("Location:../pages/our-reference-list?error=true");
        exit();
    }
}



if (isset($_GET['reference_id']) && $_GET['delete'] == 'true') {

    $referenceId = $_GET['reference_id'];



    $oldReferenceImage = $ourReferenceModel->getGalleryPathById($referenceId);
    unlink("../../assets/img/our-reference/" . $oldReferenceImage);

    $result = $ourReferenceModel->deleteOurReference($referenceId);

    if ($result) {
        header("Location:../pages/our-reference-list?success=true");
        exit();
    } else {
        header("Location:../pages/our-reference-list?error=true");
        exit();
    }
}

?>