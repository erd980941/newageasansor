<?php
session_start();
require_once __DIR__.'/../_classes/social-media.class.php';

if (!isset($_SESSION['username']) || $_SESSION['adminLoggedIn'] !== true) {
    header('Location: ../pages/login');
    exit;
}

$socialMediaModel = new SocialMedia();

//--------------------- Site Ayarları ---------------------
if (isset($_POST['update_social_media'])) {
    $socialMediaData = [
        'instagram' => htmlspecialchars($_POST['instagram']),
        'facebook' => htmlspecialchars($_POST['facebook']),
        'linkedin' => htmlspecialchars($_POST['linkedin']),
        'youtube' => htmlspecialchars($_POST['youtube']),
    ];

    $result = $socialMediaModel->updateSocialMedia($socialMediaData);

    if ($result) {
        header("Location:../pages/social-media?success=true");
        exit();
    } else {
        header("Location:../pages/social-media?error=true");
        exit();
    }
}








?>