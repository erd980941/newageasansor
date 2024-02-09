<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>İletişim</h2>
        <p>Sizden haber almak ve sorularınızı yanıtlamak için buradayız! Firma adı olarak müşterilerimizle iletişim kurmayı ve onlarla birlikte çalışmayı dört gözle bekliyoruz. İster projelerinizle ilgili daha fazla bilgi almak, ister işbirliği teklifi yapmak, ister sadece merhaba demek için aşağıdaki iletişim bilgilerinden bize ulaşabilirsiniz.</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Adres:</h4>
              <p><?php echo $siteContactInformationData['site_address'] ?><br>
                <b><?php echo $siteContactInformationData['site_district'] ?> / </b>
                <b><?php echo $siteContactInformationData['site_city'] ?></b>
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>E-Posta:</h4>
              <p><?php echo $siteContactInformationData['site_email'] ?></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telefon:</h4>
              <p><?php echo $siteContactInformationData['site_tel'] ?></p>
            </div>

            <div class="phone">
                <i class='bx bxl-whatsapp' ></i>
              <h4>Whatsapp:</h4>
              <p><?php echo $siteContactInformationData['site_whatsapp'] ?></p>
            </div>

            
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div class="info">
          <iframe
              src="<?php echo $siteContactInformationData['site_maps'] ?>"
              frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen>
            </iframe>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->