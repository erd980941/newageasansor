<?php include __DIR__.'/../business/site-settings.response.php' ?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $siteSettingsData['site_title'] ?></title>
  <meta content="<?php echo $siteSettingsData['site_description'] ?>" name="description">
  <meta content="<?php echo $siteSettingsData['site_author'] ?>" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url?>/assets/img/favicon.png" rel="icon">
  <link href="<?=base_url?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url?>/assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url?>/assets/css/custom.css" rel="stylesheet">


</head>