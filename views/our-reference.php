<?php include __DIR__.'/../business/our-reference.response.php' ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Referanslarımız</h2>
        <p>Deneyimli ekibimiz tarafından başarıyla tamamlanan asansör projelerimizden bazıları. Size sunduğumuz
          çözümleri görmek için referanslarımıza göz atın.</p>
      </div>

     

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach($ourReferences as $reference): ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/our-reference/<?php echo $reference['reference_image'] ?>" class="img-fluid" alt="NewAgeAsansor"></div>
            <div class="portfolio-info">
              <h4><?php echo $reference['reference_name'] ?></h4>
              <p><?php echo $reference['reference_description'] ?></p>
              <a href="assets/img/our-reference/<?php echo $reference['reference_image'] ?>" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="<?php echo $reference['reference_name'] ?> / <?php echo $reference['reference_description'] ?>"><i class="bx bx-plus"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>