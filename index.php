<?php include __DIR__ . "/views/header.php"; ?>
<?php include __DIR__ . "/views/navbar.php"; ?>
<?php include __DIR__ . "/views/banner.php"; ?>


<main id="main">
  <!-- <?php include __DIR__ . "/views/our-brand.php"; ?> -->

  <?php include __DIR__ . '/views/why-us.php' ?>

  <?php include __DIR__ . "/views/about-us.php"; ?>

  <?php include __DIR__ . '/views/elevators.php'; ?>



  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>Eyleme Geçme Zamanı</h3>
          <p>Asansör ihtiyaçlarınız için en iyi çözümleri sunmak ve size özel hizmetlerimizden faydalanmanızı sağlamak
            için buradayız. Sizi bekliyoruz!</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#contact"> Bize Ulaşın</a>
        </div>
      </div>
    </div>
  </section><!-- End Cta Section -->

  <?php include __DIR__ . '/views/our-reference.php' ?>

  <?php include __DIR__.'/views/our-document.php' ?>

  <?php include __DIR__ . "/views/contact.php"; ?>

</main><!-- End #main -->

<?php include __DIR__ . "/views/footer.php"; ?>