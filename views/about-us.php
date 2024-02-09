<?php include __DIR__ . '/../business/about-us.response.php' ?>

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Hakkımızda</h2>
        </div>

        <div class="row content">
            <div class="col-lg-7">
                <?php echo $aboutUs['about_content'] ?>
            </div>
            <div class="col-lg-5 pt-4 pt-lg-0">
                <img src="assets/img/<?php echo $aboutUs['about_image'] ?>" alt="<?php echo $aboutUs['about_image_alt'] ?>" class="img-fluid" data-aos="zoom-in" >
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->