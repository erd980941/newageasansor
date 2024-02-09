<!-- ======= Services Section ======= -->
<?php include __DIR__ . '/../business/why-us.response.php' ?>
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <!-- <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit
                in iste officiis commodi quidem hic quas.</p>
        </div> -->

        <div class="row">
            <?php foreach ($whyUsItems as $i => $item): ?>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                    data-aos-delay="<?php echo $i * 100 ?>">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a href="">
                                <?php echo $item['why_us_title'] ?>
                            </a></h4>
                        <p>
                            <?php echo $item['why_us_content'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>

    </div>
</section><!-- End Services Section -->