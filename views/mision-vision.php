<?php include __DIR__ . "/../business/mision-vision.response.php" ?>
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Misyon</h2>
        </div>

        <div class="row content">
            <div class="col-lg-7">
                <?php echo $mision['mv_content'] ?>
                <!-- <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit
                    </li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </li>
                </ul> -->
            </div>
            <div class="col-lg-5 pt-4 pt-lg-0">
                <img src="assets/img/<?php echo $mision['mv_image'] ?>" alt="NewAge Asansör" class="img-fluid">
            </div>


        </div>
        <div class="section-title mt-5">
            <h2>Vizyon</h2>
        </div>
        <div class="row content">
            <div class="col-lg-5 pt-4">
                <img src="assets/img/<?php echo $vision['mv_image'] ?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <?php echo $vision['mv_content'] ?>
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->