<?php include __DIR__ . '/../business/footer.response.php' ?>
<!-- ======= Footer ======= -->
<footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3><?php echo $siteSettings['site_title'] ?></h3>
        <p>
          <?php echo $siteContactInformationData['site_address'] ?><br>
          <b><?php echo $siteContactInformationData['site_district'] ?> / <?php echo $siteContactInformationData['site_city'] ?></b><br><br>
          <strong>Phone:</strong> <?php echo $siteContactInformationData['site_tel'] ?><br>
          <strong>Email:</strong> <?php echo $siteContactInformationData['site_email'] ?><br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Menü</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>/">Anasayfa</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>/hakkimizda">Hakkımızda</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>/misyon-vizyon">Misyon ve Vizyon</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>/belgelerimiz">Belgelerimiz</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>/asansorler">Asansörler</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>/referanslarimiz">Referanslarımız</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>/iletisim">İletişim</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Asansörler</h4>
        <ul>
          <?php foreach($productsFooter as $product): ?>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url ?>/asansor/<?php echo $product['product_url'] ?>"><?php echo $product['product_name'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Sosyal Medyada Biz</h4>
        <p>Bizimle sosyal medyada da bağlantıda kalın! En son projelerimizi, sektörel güncellemeleri ve firmamızla ilgili haberleri paylaştığımız sosyal medya hesaplarımızı takip ederek bize katılın. Yaratıcı çözümler, güncel bilgiler ve sektördeki en son trendler için bizi takip etmeyi unutmayın.</p>
        <div class="social-links mt-3">
          <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
          <a href="<?php echo $socialMediaFooter['facebook'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?php echo $socialMediaFooter['instagram'] ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="<?php echo $socialMediaFooter['linkedin'] ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="<?php echo $socialMediaFooter['youtube'] ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    Copyright &copy; 2024 <strong><span><?php echo $siteSettings['site_title'] ?></span></strong>. Tüm Hakları Saklıdır
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
    <a href="https://www.linkedin.com/in/erdf15/">Erdal Fidan</a> Tarafından Tasarlanmıştır.
  </div>



</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?=base_url?>/assets/vendor/aos/aos.js"></script>
<script src="<?=base_url?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?=base_url?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?=base_url?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?=base_url?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?=base_url?>/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="<?=base_url?>/assets/js/main.js"></script>

</body>

</html>